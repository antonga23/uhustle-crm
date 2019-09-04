<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Response;
use App\Lead;
use App\Twillio;
use App\Product;
use App\LeadsCallbacks;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;
use Twilio\TwiML\VoiceResponse;
use Twilio\Twiml;
use Carbon\Carbon;

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
        $to_number = $request->phone_number;
        $encodedSalesPhone = urlencode(str_replace(' ','',$twilio_number));
        $host = config('app.url');
        
        $account_sid = config('twillio.twillio_account_sid');
        $auth_token = config('twillio.twillio_auth_token');

        $client = new Client($account_sid, $auth_token);

        try {
            $client->calls->create(
                $to_number, // The visitor's phone number
                $twilio_number, // A Twilio number in your account
                array(
                    "url" => "$host/calls/outbound/$encodedSalesPhone"
                )
            );
        } catch (Exception $e) {
            // Failed calls will throw
            return $e;
        }
    
        // return a JSON response
        return array('message' => 'Call incoming!');
    }

    public function outBound ($salesPhone) {
        // A message for Twilio's TTS engine to repeat
        $sayMessage = 'Thanks for contacting our sales department. Our
            next available representative will take your call.';
    
        $twiml = new Twiml();
        $twiml->say($sayMessage, array('voice' => 'alice'));
        $twiml->dial($salesPhone);
    
        return response($twiml, 200)
                            ->header('Content-Type', 'text/xml'); 
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
        $twiml->record();
        
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

    public function getCallHistory($month = ''){

        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $now = Carbon::now();

        if($month == ''){
            $month = $now->month;
        }

        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = config('twillio.twillio_account_sid');
        $auth_token = config('twillio.twillio_auth_token');

        $client = new Client($account_sid, $auth_token);

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

        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = config('twillio.twillio_account_sid');
        $auth_token = config('twillio.twillio_auth_token');

        $client = new Client($account_sid, $auth_token);

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
