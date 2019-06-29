<?php

namespace App\Http\Controllers;

use Auth;
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
      
    	return $body;
   }
}
