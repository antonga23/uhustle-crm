<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Response;
use App\Twillio;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;
use Twilio\TwiML\VoiceResponse;
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
        $this->middleware('auth', ['except' => ['voice', 'statusUpdate']]);
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
        $twilio_number = config('twillio.twillio_number');
        
        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = config('twillio.twillio_account_sid');
        $auth_token = config('twillio.twillio_auth_token');
        $twiml_app_sid = config('twillio.twillio_twiml_app_sid');

        $twilio = new Client($account_sid, $auth_token);
        
        // Call
        $lead_id = $request->lead_id;
        // $to_number = '+27619932376';
        $to_number = $request->phone_number;

        $call = $twilio->calls
                       ->create(
                            $to_number, // to
                            $twilio_number, // from
                            array("url" => "http://demo.twilio.com/docs/voice.xml")
                       );
        
        print($call->sid);
    }

    public function call(Request $request){
        
        // A Twilio number you own with Voice capabilities
        $twilio_number = config('twillio.twillio_number');

        // Call
        $lead_id = $request->lead_id;
        // $to_number = '+27619932376';
        $to_number = $request->phone_number;
        
        $response = new Twiml;
        
        if (isset($to_number) && strlen($to_number) > 0) {
            
            $dial = $response->dial(array('callerId' => $twilio_number));

            $dial->number($to_number);

        }else{
            $response->say("Thanks for calling!");
            
        }
        
        echo $response;
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

        //$capability->allowClientIncoming($identity);

        $token = $capability->generateToken();
        // return serialized token and the user's randomly generated ID
        
        Log::info("Token");
        Log::info($token);

        return array( 'identity' => $identity,'token' => $token,);
    }

    public function voice(Request $request){
        
        // A Twilio number you own with Voice capabilities
        $twilio_number = config('twillio.twillio_number');

        // Where to make a voice call (your cell phone?)
        $lead_id = $request->lead_id;
        // $to_number = '+27619932376';
        $to_number = $request->phone_number;
        
        $twiml = new Twiml;
        
        if (isset($to_number) && strlen($to_number) > 0) {
            
            $twiml->dial($to_number,array('callerId' => $twilio_number));

        }else{
            $twiml->say("Thanks for calling!");
            
        }
        
        $response = Response::make($twiml, 200);
        $response->header('Content-Type', 'text/xml');
        Log::info("Voice");
        Log::info($response);
        return $response;
    }

    public function statusUpdate(Request $request){

        $call_status = $request->CallStatus;
        $call_sid = $request->CallSid;

        $twiml = new Twiml;

        $call_exist = Twillio::where(['call_sid' => $call_sid])->first();

        Log::info("call_sid");
        Log::info($call_sid);

        Log::info("Status");
        Log::info($call_status);
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

            $response = Response::make($twiml, 200);
            $response->header('Content-Type', 'text/xml');
            Log::info("Status Update");
            Log::info($response);
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
