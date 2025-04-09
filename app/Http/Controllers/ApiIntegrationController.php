<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\ApiIntegration;
use App\ApiIntegrationAttributes;
use Illuminate\Http\Request;

class ApiIntegrationController extends Controller
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
        $apis = ApiIntegration::with('attributes')->get();
        return array('success' => true, 'apis' => $apis);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApiIntegration  $apiIntegration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $apis = $request->all();

        try{
            DB::beginTransaction();

            foreach($apis as $key => $api){
                foreach($api['attributes'] as $i => $attribute){
                    ApiIntegrationAttributes::find($attribute['id'])->update($attribute);
                }
            }

            DB::commit();
            return array('success' => true, 'message' => 'API Information updated' );

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

}
