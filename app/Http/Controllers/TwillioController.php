<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Twillio;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;
use Twilio\Twiml;

class TwillioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['voice', 'callPostBack', 'smsPostBack','getCallStatus']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Twillio  $twillio
     * @return \Illuminate\Http\Response
     */
    public function show(Twillio $twillio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Twillio  $twillio
     * @return \Illuminate\Http\Response
     */
    public function edit(Twillio $twillio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Twillio  $twillio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Twillio $twillio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Twillio  $twillio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Twillio $twillio)
    {
        //
    }

    public function newToken(Request $request)
    {

        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = config('twillio.twillio_account_sid');
        $auth_token = config('twillio.twillio_auth_token');
        $twiml_app_sid = config('twillio.twillio_twiml_app_sid');

        $identity = Auth::user()->name . Auth::user()->lastname ;
        
        $capability = new ClientToken($account_sid, $auth_token);

        $capability->allowClientOutgoing($twiml_app_sid);

        $capability->allowClientIncoming($identity);

        $token = $capability->generateToken();
        // return serialized token and the user's randomly generated ID
        
        return array( 'identity' => $identity,'token' => $token,);
    }

    public function voice(Request $request){
        
        // A Twilio number you own with Voice capabilities
        $twilio_number = config('twillio.twillio_number');

        // Where to make a voice call (your cell phone?)
        $lead_id = $request->lead_id;
        $to_number = $request->phone_number;
        
        $response = new Twiml;

        if (isset($to_number) && strlen($to_number) > 0) {
            error_log('Number in');
            $dial = $response->dial(array('callerId' => $twilio_number,'record' => true));

            if (preg_match("/^[\d\+\-\(\) ]+$/", $to_number)) {
                $dial->number($to_number);
                $dial->record();
                error_log('Number dialed');
            } else {
                error_log('Client dialed');
                $dial->client($to_number);
            }
        }else{
            $response->say("Thanks for calling!");
            error_log('Thanks for calling dialed');
        }

        header('Content-Type: text/xml');
        return $response;

        $call_exist = Twillio::where(['call_sid' => $call->sid])->first();

        try{
            DB::beginTransaction();

            if($call_exist){

                Twillio::where(['call_sid' => $call_sid])->update([
                    'call_status' => $call_status
                ]);

            }else{

                Twillio::create([
                    'agent_name' => $request_user['name'],
                    'agent_id' => $request_user['user_id'],
                    'lead_id' => $request->lead_id,
                    'call_sid' => $call->sid,
                    'call_status' => $call->status
                ]);

            }

            DB::commit();

            return ['status' => $call->status,'call_sid' => $call->sid, 'to_number' => $to_number];

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        } 
    }

    public function makeCall(Request $request){

        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = config('twillio.twillio_account_sid');
        $auth_token = config('twillio.twillio_auth_token');

        // A Twilio number you own with Voice capabilities
        $twilio_number = config('twillio.twillio_number');

        $messages = [
            'required' => 'The :attribute is mandatory',
            'phone_number.regex' => 'The phone number must be in E.164 format e.g. +27671234567'
        ];

        $this->validate(
            $request, [
                // E.164 format
                'phone_number' => 'required|regex:/^\+[1-9]\d{1,14}$/',
                'lead_id' => 'required',
            ], $messages
        );

        // Where to make a voice call (your cell phone?)
        $to_number = '+27781108088';

        $client = new Client($account_sid, $auth_token);

        $call = $client->calls->create(  
            $to_number,
            $twilio_number,
            array(
                "record" => True,
                "url" => "http://demo.twilio.com/docs/voice.xml"
            )
        );

        $call_exist = Twillio::where(['call_sid' => $call->sid])->first();

        try{
            DB::beginTransaction();

            if($call_exist){

                Twillio::where(['call_sid' => $call_sid])->update([
                    'call_status' => $call_status
                ]);

            }else{

                Twillio::create([
                    'agent_name' => $request_user['name'],
                    'agent_id' => $request_user['user_id'],
                    'lead_id' => $request->lead_id,
                    'call_sid' => $call->sid,
                    'call_status' => $call->status
                ]);

            }

            DB::commit();

            return ['status' => $call->status,'call_sid' => $call->sid, 'to_number' => $to_number];

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }  
    }

    public function endCall(Request $request){

        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];


        $messages = [
            'required' => 'The :attribute is mandatory',
        ];

        $this->validate(
            $request, [
                'call_sid' => 'required',
            ], $messages
        );

        $call_sid = $request->call_sid;
        
        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = config('twillio.twillio_account_sid');
        $auth_token = config('twillio.twillio_auth_token');

        $client = new Client($account_sid, $auth_token);

        $call = $client->calls($call_sid)
                        ->update(array("status" => "completed"));;

        
        Twillio::where(['call_sid' => $call_sid])->update([
            'call_status' => $call->status
        ]);

        return array('success' => true, 'call_status' => $call->status);
    }

    public function getCallStatus(Request $request){

        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];


        $messages = [
            'required' => 'The :attribute is mandatory',
        ];

        $this->validate(
            $request, [
                'call_sid' => 'required',
            ], $messages
        );

        $call_sid = $request->call_sid;

        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = config('twillio.twillio_account_sid');
        $auth_token = config('twillio.twillio_auth_token');

        $client = new Client($account_sid, $auth_token);

        $call = $client->calls($call_sid)
               ->fetch();

        if(( $call->status == 'answered' )){ 
            Twillio::where(['call_sid' => $call_sid])->update([
                'call_status' => $call->status,
                'answered' => 1
            ]);
        }else{
            Twillio::where(['call_sid' => $call_sid])->update([
                'call_status' => $call->status
            ]);
        }
        return array('success' => true, 'call_status' => $call->status);
    }


    public function getCallHistoryByAgentID(Request $request,$id = null, $month = null){

        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $query_month = ( is_null($month) ) ? date('m') : $month ;

        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = config('twillio.twillio_account_sid');
        $auth_token = config('twillio.twillio_auth_token');

        $client = new Client($account_sid, $auth_token);

        $twilios = Twillio::with('lead')->where(['agent_id' => $id])->whereMonth('created_at', '=' ,$query_month)->get();

        $call_history = [];
        foreach ($twilios as $key => $value) {

            $call = $client->calls($value->call_sid)->fetch();

            $data = new \StdClass();

            $data->lead_id = $value->lead->id;
            $data->lead_name = $value->lead->name . ' ' . $value->lead->surname;
            $data->lead_country = $value->lead->country;
            $data->call_date_created = $value->created_at;
            // $data->call_date_updated = $call->date_updated;
            $data->call_duration = $call->duration;
            // $data->call_end_time = $call->end_time;
            // $data->call_forwarded_from = $call->forwarded_from;
            $data->call_from = $call->from;
            // $data->call_from_formatted = $call->from_formatted;
            $data->call_price = $call->price;
            // $data->call_price_unit = $call->price_unit;
            $data->call_sid = $call->sid;
            // $data->call_start_time = $call->start_time;
            $data->call_status = $call->status;
            $data->call_to = $call->to;
            
            array_push($call_history,$data);
        }

        $total_calls = Twillio::with('lead')->where(['agent_id' => $id])->get();

        return array('success' => true, 'call_history' => $call_history);
    }
}
