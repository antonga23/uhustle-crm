<?php

namespace App\Http\Controllers;

use DB;
use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
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

    public function index(){
    	 $clients = Client::get();
    	 return array('success' => true, 'clients' => $clients);
    }

    public function store(Request $request){
    	$data = $request->all();
    	$vat = $data['vat'];
    	$name = $data['name'];
    	$company_name = $data['company_name'];
		$address = $data['address'];
		$zipcode = $data['zipcode'];
		$email = $data['email'];
		$city = $data['city'];
		$primary_number = $data['primary_number'];
		$secondary_number = $data['secondary_number'];
		$company_type = $data['company_type'];
		$industry = $data['industry'];
		$industry_id = $data['industry_id'];
		$user_id = $data['user_id'];
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        try{
            DB::beginTransaction();

            $client = Client::create([
				'vat' => $vat,
				'name' => $name,
				'company_name' => $company_name,
				'address' => $address,
				'zipcode' => $zipcode,
				'email' => $email,
				'city' => $city,
				'primary_number' => $primary_number,
				'secondary_number' => $secondary_number,
				'company_type' => $company_type,
				'industry' => $industry,
				'industry_id' => $industry_id,
				'user_id'  => $user_id
            ]);

            DB::commit();
            return array('success' => true, 'client' => $client);

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }


    public function update(Request $request){
    	$data = $request->all();
    	$id = $data['id'];
    	$vat = $data['vat'];
    	$name = $data['name'];
    	$company_name = $data['company_name'];
		$address = $data['address'];
		$zipcode = $data['zipcode'];
		$email = $data['email'];
		$city = $data['city'];
		$primary_number = $data['primary_number'];
		$secondary_number = $data['secondary_number'];
		$company_type = $data['company_type'];
		$industry = $data['industry'];
		$industry_id = $data['industry_id'];
		$user_id = $data['user_id'];

        try{
            DB::beginTransaction();

            $client = Client::where(['id' => $id])->update([
				'vat' => $vat,
				'name' => $name,
				'company_name' => $company_name,
				'address' => $address,
				'zipcode' => $zipcode,
				'email' => $email,
				'city' => $city,
				'primary_number' => $primary_number,
				'secondary_number' => $secondary_number,
				'company_type' => $company_type,
				'industry' => $industry,
				'industry_id' => $industry_id,
				'user_id'  => $user_id
            ]);

            DB::commit();
            return array('success' => true, 'client' => Client::find($id));

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    public function getById($id){
		 $client = Client::findOrFail($id);
		 return array('success' => true, 'client' => $client);
    }

    public function destroy($id){
		 $client = Client::where(['id' => $id])->delete();
		 return array('success' => true, 'client' => $client);
    }
}
