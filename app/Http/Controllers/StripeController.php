<?php

namespace App\Http\Controllers;

use App\Stripe;
use \Stripe\Stripe as StripeAPI;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        StripeAPI::setApiKey("sk_test_4eC39HqLyjWDarjtT1zdp7dc");

        $balance_transactions = \Stripe\BalanceTransaction::all();

        dd( $balance_transactions );
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
     * @param  \App\Stripe  $stripe
     * @return \Illuminate\Http\Response
     */
    public function show(Stripe $stripe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stripe  $stripe
     * @return \Illuminate\Http\Response
     */
    public function edit(Stripe $stripe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stripe  $stripe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stripe $stripe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stripe  $stripe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stripe $stripe)
    {
        //
    }
}
