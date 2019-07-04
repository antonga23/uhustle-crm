<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;

class GuzzleController extends Controller
{
    /* Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }

   /**
    * Make the API call using guzzle
    *
    * @return json
    */
   public function index(Request $request)
   {
      
      $this->validate($request, [
          'method' => 'required',
          'end_point' => 'required'
      ]);

      $client = new \GuzzleHttp\Client();

      $user_id = Auth::user()->id;
      
      $user_fullname = Auth::user()->name;

      $session_details_string = "?session_user_id=$user_id&session_user_name=$user_fullname";

      $end_point = config('api.api_url') . $request->end_point . $session_details_string;

      if($request->end_point == 'calls/call'){
        $request->form_data = [
          'lead_id' => Session::get('lead_id'),
          'phone_number' => Session::get('phone_number')
        ];
      }else if('leads/setcallback'){
        $request->form_data = [
          'id' => Session::get('lead_id'),
          'user_id' => $user_id,
          'call_back_time' => $request->form_data['call_back_time'],
          'notes' => $request->form_data['notes'],
          'status' => 1
        ];
      }
      
      $response = $client->request( 
    		strtoupper($request->method) , 
    		$end_point, 
    		[
          'headers' => [
            'Accept' => 'application/json',
            'Authorization' => config('api.auth_string')
          ],
          'form_params' => $request->form_data
      	]
      );
      
      $body = json_decode($response->getBody(), true);
      
      if(isset($body['lead'])){
        Session::put('lead_id', $body['lead']['id']);
        Session::put('phone_number',$body['lead']['phone_number']);
      }

    	return $body;
   }
}
