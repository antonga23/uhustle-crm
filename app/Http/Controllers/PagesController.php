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
   public function index($lead_id = null)
   {
      if(is_null($lead_id)){
         return view('pages.workstation')->with(['active'=> 'workstation'])->with(['lead_id'=> '']);
      }else{
         return view('pages.workstation')->with(['active'=> 'workstation'])->with(['lead_id'=> $lead_id]);
      }
   }

   public function dashboard()
   {
      return view('pages.dashboard')->with(['active'=> 'dashboard']);
   }

   public function callHistory()
   {
      return view('pages.call-history')->with(['active'=> 'call-history']);
   }

   public function socialBoard()
   {
      return view('pages.social-board')->with(['active'=> 'social-board']);
   }

   public function users()
   {
      return view('pages.users')->with(['active'=> 'users']);
   }

   public function leads()
   {
      return view('pages.leads')->with(['active'=> 'leads']);
   }

   public function contacts()
   {
      return view('pages.contacts')->with(['active'=> 'contacts']);
   }
}
