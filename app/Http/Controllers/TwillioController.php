<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Response;
use App\User;
use App\Lead;
use App\Twillio;
use App\Product;
use App\LeadsCallbacks;
use App\ApiIntegration;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;
use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;
use Twilio\TwiML\VoiceResponse;
use Twilio\Twiml;
use Carbon\Carbon;

class TwillioController extends Controller
{

    public $twilio_number;
    public $account_sid;
    public $auth_token;
    public $twiml_app_sid;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['voice', 'statusUpdate']]);

        $twillio = ApiIntegration::with('attributes')->where(['name' => 'Twillio'])->first();

        foreach ($twillio->attributes as $key => $value) {
            switch($value->key){
                case 'twilio_phone_number':
                        $twilio_phone_number = $value->value;
                    break;
                case 'account_sid':
                        $account_sid = $value->value;
                    break;
                case 'auth_token':
                        $auth_token = $value->value;
                    break;
                case 'twiml_app_sid':
                        $twiml_app_sid = $value->value;
                    break;
            }
        }
        $this->twilio_number = ( config('twillio.twillio_number') !== '' )? config('twillio.twillio_number') : $twilio_phone_number ;
        $this->account_sid = ( config('twillio.twillio_account_sid') !== '' )? config('twillio.twillio_account_sid') : $account_sid ;
        $this->auth_token = ( config('twillio.twillio_auth_token') !== '' )? config('twillio.twillio_auth_token') : $auth_token ;
        $this->twiml_app_sid = ( config('twillio.twillio_twiml_app_sid') !== '' )? config('twillio.twillio_twiml_app_sid') : $twiml_app_sid ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Twillio  $twillio
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $twilio = new Client($this->account_sid, $this->auth_token);
       
        $conferences = $twilio->conferences
                              ->read(array(),1);
                            //   ->read(array("status" => "in-progress"),500);
              
        $conferences_arr = [];

        foreach ($conferences as $record) {
            
            $data = new \StdClass();
            $data->accountSid = $record->accountSid;
            $data->dateCreated = Carbon::parse($record->dateCreated)->toDateTimeString();
            $data->dateUpdated = Carbon::parse($record->dateUpdated)->toDateTimeString();
            $data->duration = Carbon::parse($record->dateCreated)->diffInSeconds(Carbon::parse($record->dateUpdated));
            $data->friendlyName = $record->friendlyName;
            $data->status = $record->status;

            $lead_info = $this->getConferenceLeadInfo($data->friendlyName);
            $lead = $lead_info['lead'];
            $caller = $lead_info['caller'];

            $data->lead = $lead;
            $data->lead_type = $lead_info['lead_type'];
            $data->lead_name = ucwords($lead->name . ' ' . $lead->surname);
            $data->lead_mobile = $lead->phone_number;
            $data->lead_country = $lead->country;
            $data->lead_owner = ucwords($lead->creator->name . ' ' . $lead->creator->lastname);
            $data->lead_assignee = ucwords($lead->user->name . ' ' . $lead->user->lastname);
            $data->lead_caller = ucwords($caller['name'] . ' ' . $caller['lastname']);
            $data->lead_product = $lead->product['name'];
            $data->conference_sid = $record->sid;

            // TODO - Get caller to coach SID
            $client = new GuzzleClient([
                'auth' => [$this->account_sid, $this->auth_token],
            ]);

            // $form_data = [
            //     'To' => $to_number,
            //     'From' => $this->twilio_number,
            //     'EarlyMedia' => true
            // ];

            // $end_point = "https://api.twilio.com/2010-04-01/Accounts/$this->account_sid/Conferences/$conference_name/Participants";
            $end_point = "https://api.twilio.com/2010-04-01/Accounts/$this->account_sid/Conferences/$data->conference_sid/Participants.json";

            $participants_response = $client->request( 
                'GET', 
                $end_point, 
                [
                        'headers' => [
                        'Accept' => 'application/json',
                    ],
                ]
            );

            $body = json_decode($participants_response->getBody(), true);

            $participants = $body['participants'];

            $coaching_sid = $this->getAgentToCoach($participants);

            $data->coaching_sid = $coaching_sid;

            array_push($conferences_arr, $data);
        }

        return ['conferences' => $conferences_arr];
    }

    public function getConferenceLeadInfo($conference_name){
        $name_parts = explode('-', $conference_name);
        $lead_type = ( $name_parts[0] == 'L' )? 'Lead' : 'Contact' ;
        $lead_id = (isset($name_parts[1])) ? $name_parts[1] : 830;
        $caller_id = (isset($name_parts[2])) ? $name_parts[2] : 1;

        $lead = Lead::with('user')->with('creator')->with('product')->findOrFail($lead_id);
        $caller = User::where(['id' => $caller_id])->select('name','lastname')->first();

        return [
            'caller' => $caller,
            'lead' => $lead,
            'lead_type' => $lead_type,
        ];
    }

    public function getAgentToCoach($participants = array()){

        $twilio = new Client($this->account_sid, $this->auth_token);

        foreach ($participants as $key => $value) {
            $call = $twilio->calls($value['call_sid'])
                            ->fetch();

            if($call->from == "client:Anonymous"){
                return $value['call_sid'];
            }
        }
    }

    public function newToken(Request $request)
    {

        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $identity = Auth::user()->name . Auth::user()->lastname ;

        $capability = new ClientToken($this->account_sid, $this->auth_token);

        $capability->allowClientOutgoing($this->twiml_app_sid);

        //$capability->allowClientIncoming($identity);

        $token = $capability->generateToken();

        return array( 'identity' => $identity,'token' => $token,);
    }

    public function voice(Request $request){

        $response = new VoiceResponse();

        if( isset($request->action) ){ // If Caoching 
            switch ($request->action) {  // Barge in a conference in progess
                case 'Barge':
                        $dial = $response->dial('');

                        $dial->conference($request->conference);
                        
                        $response = Response::make($response, 200);
                    break;

                case 'Whisper':// Coach in a confernce
            
                        $dial = $response->dial('', [
                            // 'muted' => 'true',
                            'coaching' => 'true',
                            'callSidToCoach' => $request->coaching_sid
                        ]);
                        
                        $dial->conference($request->conference);
                        
                        $response = Response::make($response, 200);
                    break;
                default:
                    # code...
                    break;
            }
        }else{
            // Lead information needed to create the conference
            $lead_id = $request->lead_id;
            $is_client = $request->is_client;
            $lead_owner = $request->lead_owner;
            $lead_assignee = $request->lead_assignee;
            $caller_id = $request->user_id;

            $to_number = $request->phone_number;
            
            $twiml = new Twiml;
            
            if (isset($to_number) && strlen($to_number) > 0) {

                $prefix = ($is_client == 0)? 'L-' : 'C-';

                $conference_name = $prefix.$lead_id . '-' . $caller_id;
                
                $dial = $twiml->dial('',['from' => 'client:Agent']);

                $dial->conference($conference_name, [
                        'maxParticipants' => 3, 
                        'startConferenceOnEnter' => true, 
                        'endConferenceOnExit' => True,
                        'record' => 'record-from-start'
                    ]);

            }else{
                $twiml->say("Thanks for calling!");
            }

            $twiml->record();
            
            $response = Response::make($twiml, 200);

            $client = new GuzzleClient([
                'auth' => [$this->account_sid, $this->auth_token],
            ]);

            $form_data = [
                'To' => $to_number,
                'From' => $this->twilio_number,
                'EarlyMedia' => true
            ];

            $end_point = "https://api.twilio.com/2010-04-01/Accounts/$this->account_sid/Conferences/$conference_name/Participants";

            $participants_response = $client->request( 
                'POST', 
                $end_point, 
                [
                        'headers' => [
                        'Accept' => 'application/json',
                    ],
                    'form_params' => $form_data
                ]
            );

            $body = json_decode($participants_response->getBody(), true);
        }

        $response->header('Content-Type', 'text/xml');
        return $response;
    }

    public function joinConference(Request $request){

        $conference_name = $request->conference_name;

        $response = new TwiML;

        $dial = $response->dial();

        $dial->conference($conference_name, array(
                'startConferenceOnEnter' => False
            ));
        
        return $response;
    }

    public function statusUpdate(Request $request){

        $call_status = $request->CallStatus;
        $call_sid = $request->CallSid;

        $twiml = new Twiml;

        $call_exist = Twillio::where(['call_sid' => $call_sid])->first();

        try{
            DB::beginTransaction();

            if($call_exist){

                Twillio::where(['call_sid' => $call_sid])->update([
                    'call_status' => $call_status
                ]);

            }else{

                Twillio::create([
                    'agent_name' => ' ',
                    'agent_id' => ' ',
                    'call_sid' => $call_sid,
                    'call_status' => $call_status
                ]);

            }

            DB::commit();

            $dial = $twiml->say($call_status);

            $response = Response::make($twiml, 200);
            $response->header('Content-Type', 'text/xml');

            return $response;

        }catch(\QueryException $e){
            DB::rollback();

            $response = Response::make($twiml, 400);
            $response->header('Content-Type', 'text/xml');
            Log::info("Status Update");
            Log::info($response);
            return $response;
        } 


    }

    public function createCallRecord(Request $request){

        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $lead_id = $request->lead_id;
        $call_sid = $request->call_sid;

        $call_exist = Twillio::where(['call_sid' => $call_sid])->first();

        try{
            DB::beginTransaction();

            if($call_exist){

                Twillio::where(['call_sid' => $call_sid])->update([ 
                    'lead_id' => $lead_id,
                ]);

            }else{

                Twillio::create([
                    'agent_name' => $request_user['name'],
                    'agent_id' => $request_user['user_id'],
                    'lead_id' => $lead_id,
                    'call_sid' => $call_sid
                ]);

            }

            DB::commit();

            header('Content-Type: application/json');
            return json_encode(['call_sid' => $call_sid]);

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        } 
    }

    public function getCallHistory($month = ''){

        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $now = Carbon::now();

        if($month == ''){
            $month = $now->month;
        }

        $client = new Client($this->account_sid, $this->auth_token);

        $twilios = Twillio::with('lead')
                    ->where(['agent_id' => $request_user['user_id']])
                    ->whereYear('created_at', '=' ,$now->year)
                    ->whereMonth('created_at', '=' ,$month)
                    ->orderBy('created_at', 'DESC')
                    ->get();
        
        $sum_sales = 0;
        $sum_call_back = 0;
        $avg_time = 0;
        $total_time = 0;
        $con_ratio = 0;
        foreach ($twilios as $key => $value) {

            if($value->sale){
                $product = Product::find($value->lead->product_id);
                $price = $product->price;
                $sum_sales += $price;
            }

            $sum_call_back += $value->has_call_back;
            $total_time += $value->call_duration;
        }

        $total_calls = Twillio::where(['agent_id' => $request_user['user_id']])
                                ->whereYear('created_at', '=' ,$now->year)
                                ->whereMonth('created_at', '=' ,$month)
                                ->count();

        $total_sales = Twillio::where(['sale' => 1])
                                ->where(['agent_id' => $request_user['user_id']])
                                ->whereYear('created_at', '=' ,$now->year)
                                ->whereMonth('created_at', '=' ,$month)
                                ->count();
        if($total_calls > 0){

            $con_ratio = ceil( $total_sales / $total_calls );

            $avg_time = ceil($total_time / $total_calls );
        }


        return array(
            'success' => true, 
            'total_calls' => $total_calls,
            'total_sales' => $total_sales,
            'con_ratio' => $con_ratio,
            'sum_sales' => $sum_sales,
            'sum_call_back' => $sum_call_back,
            'avg_time' => $avg_time,
            'call_history' => $twilios
        );
    }

    public function hasCallBack($lead_id){
        $count = LeadsCallbacks::where(['user_id' => Auth::user()->id])->where(['lead_id' => $lead_id ])->count();

        if($count > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function getDashboard($month = ''){

        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $now = Carbon::now();

        if($month == ''){
            $month = $now->month;
        }

        $client = new Client($this->account_sid, $this->auth_token);

        $twilios = Twillio::with('lead')
                    ->where(['agent_id' => $request_user['user_id']])
                    ->whereYear('created_at', '=' ,$now->year)
                    ->whereMonth('created_at', '=' ,$month)
                    ->orderBy('created_at', 'DESC')
                    ->get();
        
        $sum_sales = 0;
        $sum_call_back = 0;
        $avg_time = 0;
        $total_time = 0;
        $con_ratio = 0;
        foreach ($twilios as $key => $value) {

            if($value->sale){
                $product = Product::find($value->lead->product_id);
                $price = $product->price;
                $sum_sales += $price;
            }

            $sum_call_back += $value->has_call_back;
            $total_time += $value->call_duration;
        }

        $total_calls = Twillio::where(['agent_id' => $request_user['user_id']])
                                ->whereYear('created_at', '=' ,$now->year)
                                ->whereMonth('created_at', '=' ,$month)
                                ->count();

        $total_sales = Twillio::where(['sale' => 1])
                                ->where(['agent_id' => $request_user['user_id']])
                                ->whereYear('created_at', '=' ,$now->year)
                                ->whereMonth('created_at', '=' ,$month)
                                ->count();
        if($total_calls > 0){

            $con_ratio = ceil( $total_sales / $total_calls );

            $avg_time = ceil($total_time / $total_calls );
        }


        return array(
            'success' => true, 
            'total_calls' => $total_calls,
            'total_sales' => $total_sales,
            'con_ratio' => $con_ratio,
            'sum_sales' => $sum_sales,
            'sum_call_back' => $sum_call_back,
            'avg_time' => $avg_time,
            'call_history' => $twilios
        );
    }
}
