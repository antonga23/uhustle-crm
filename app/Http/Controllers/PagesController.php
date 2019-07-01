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
      return view('pages.workstation')->with(['active'=> 'workstation']);
   }

   public function dashboard()
   {
      return view('pages.dashboard')->with(['active'=> 'dashboard']);
   }
}
