<?php

namespace App\Http\Controllers;

use DB;
use App\Client;
use App\Lead;
use App\Comment;
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
	
	public function getAllTransactions(){
		$transactions = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 1])->where(['status' => 1])->get();
		return array('success' => true, 'transactions' => $this->compactTransactions($transactions));
	}

	public function compactTransactions($leads = null){

        $compact_leads = [];

        foreach($leads as $key => $lead){
            $data = new \StdClass();

            $last_activity = $this->getLastActivity($lead->id);
            
            if($lead->status == 1){
                $status = 'Active';
            }else if($lead->status == 2){
                $status = 'Inactive';
            }else if($lead->status == 0){
                $status = 'Canceled';
            }

            $data->id = $lead->id;
            $data->full_name = $lead->title . ' ' . $lead->name . ' ' . $lead->surname;
            $data->email = $lead->email ;
            $data->creator = $lead->creator['name'] . ' ' . $lead->creator['lastname'];
            $data->assignee = $lead->user['name'] . ' ' . $lead->user['lastname'];
            $data->phone_number = $lead->phone_number ;
            $data->product = $lead->product['name'] ;
            $data->source = $lead->lead_source['name'] ;
            $data->last_activity =   $last_activity['updated_at'];
            $data->activity = $last_activity['comment_type'] ;
            $data->activity_note = $last_activity['description'] ;
            $data->start_date = $lead->start_date ;
            $data->expires_at = $lead->expires_at ;
            $data->status  = $status;
            $data->amount  = $lead->total;
            $data->transaction_mumber  = $lead->trans_num;
            $data->lead  = $lead;

            array_push($compact_leads, $data);

        }
        return $compact_leads;
	}

    public function getLastActivity($lead_id){
        return Comment::where(['source_id' => $lead_id])->latest()->first();
    }
}
