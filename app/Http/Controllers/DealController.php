<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Deal;
use Illuminate\Http\Request;

class DealController extends Controller
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
    public function index($lead_id = null)
    {
      $deals = Deal::where( ['lead_id' => $lead_id ])->get();

      return array('success' => true, 'deals' => $deals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['agent_id'] = Auth::user()->id;

        try{
            DB::beginTransaction();

            $deal = Deal::create($data);

            DB::commit();
            return array('success' => true, 'message' => 'Deal has been created.', 'deals'  => Deal::get());

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function getAllStatus()
    {
      $paidItems = Deal::where(['status' => 1])->where( ['agent_id' => Auth::user()->id ])->get();
      $pendingItems = Deal::where(['status' => 2])->where( ['agent_id' => Auth::user()->id ])->get();
      $dueItems = Deal::where(['status' => 3])->where( ['agent_id' => Auth::user()->id ])->get();
      $rejectedItems = Deal::where(['status' => 4])->where( ['agent_id' => Auth::user()->id ])->get();

      return array(
        'paidItems' => $paidItems,
        'pendingItems' => $pendingItems,
        'dueItems' => $dueItems,
        'rejectedItems' => $rejectedItems,
      );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function edit(Deal $deal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deal $deal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deal $deal)
    {
        //
    }
}
