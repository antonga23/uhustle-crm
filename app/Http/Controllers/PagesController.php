<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;


class PagesController extends Controller
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
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://34.241.86.1/api/leads/get/84?session_user_id=22&session_user_name=sone thasi', [
                'headers' => [
                'Accept' => 'application/json',
                'Authorization' => config('api.auth_string')
                ]
            ]);
        // echo $response->getBody();
        $body = $response->getBody();
        // $lead = json_encode($body);
        // echo $body; die();
    return view('pages.dashboard')->with('lead', $body);
   }
}
