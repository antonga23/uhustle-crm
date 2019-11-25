<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Company;
use App\CompanyType;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
      return ['companies' => Company::get()];
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
      try{
          DB::beginTransaction();

          $company = Company::create($data['company']);

          DB::commit();

          return array('success' => true, 'message' => 'Company has been created.', 'company' => $company );

      }catch(\QueryException $e){
          DB::rollback();
          return array('success' =>false, 'message' => $e->getMessage());
      }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
      $data = $request->all();
      
      try{
          DB::beginTransaction();

          $company = Company::find($data['company']['id'])->update($data['company']);

          DB::commit();

          return array('success' => true, 'message' => 'Company has been update.', 'companies' => Company::get() );

      }catch(\QueryException $e){
          DB::rollback();
          return array('success' =>false, 'message' => $e->getMessage());
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

    public function getTypes(){
      return ['company_types' => CompanyType::where(['status' => 1])->get()];
    }
}
