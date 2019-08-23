<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Session;
use App\Task;
use App\User;
use App\Activity;
use App\Invoice;
use App\InvoiceLine;
use App\Lead;
use App\LeadSource;
use App\Comment;
use App\LeadsCallbacks;
use App\Product;
use App\Twillio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LeadController extends Controller
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
         $leads = Lead::with('call_backs')->with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->orderBy('created_at', 'DESC')->get();

         return array('success' => true,'count' => $leads->count(), 'leads' => $leads);
    }

    public function getActive()
    {
         $leads = Lead::with('call_backs')->with('product')->with('lead_source')->with('creator')->with('user')->with('comments')
                        ->where(['status' => 0])
                        ->orderBy('created_at', 'DESC')
                        ->get();

         return array('success' => true,'count' => $leads->count(), 'leads' => $leads);
    }

    public function getById($id){

         $lead = Lead::with('call_backs')->with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->findOrFail($id);

         $lead_info = $this->getLeadInfo($id);

         return array(
                    'success' => true, 
                    'lead' => $lead,  
                    'activity_log' => $lead_info['activity_log'],
                    'comments' => $lead_info['comments'],
                    'call_counts' => $lead_info['call_counts']
                );
    }

    public function enQueue($value='')
    {
        $id = rand(1,100);

         $lead = Lead::with('call_backs')->with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->findOrFail($id);

         $lead_info = $this->getLeadInfo($id);
         
         return array(
                    'success' => true, 
                    'lead' => $lead,  
                    'activity_log' => $lead_info['activity_log'],
                    'comments' => $lead_info['comments'],
                    'call_counts' => $lead_info['call_counts']
                );
    }

    public function getLeadInfo($id = null){

        $lead = Lead::with('call_backs')->with('comments')->findOrFail($id);

        $activity_log = Activity::where(['source_id' => $id])
                            ->where(['source_type' => 'App\Lead'])
                            ->select('created_at', 'text')
                            ->orderBy('created_at', 'DESC')
                            ->get();

        $call_count = Twillio::where(['lead_id' => $lead->id])->count();

        $call_count_answered = Twillio::where(['lead_id' => $lead->id])
                                        ->where(['answered' => 1])
                                        ->count();


        $call_count_sales = Twillio::where(['lead_id' => $lead->id])
                                        ->where(['answered' => 1])
                                        ->where(['sale' => 1])
                                        ->count();

        $comments = $this->getCommentsByLeadId('lead', $id);

        return array(
            'activity_log' => $activity_log,
            'comments' => $comments,
            'call_counts' => [
                'call_count' => $call_count, 
                'call_count_answered' => $call_count_answered,
                'call_count_sales' => $call_count_sales,
            ],
        );
    }

    public function getCommentsByLeadId($type = 'lead', $id = null){

        $source_type = 'App\Lead'; 

        $total_comments = Comment::where(['source_type' => $source_type])->where(['source_id' => $id])->count();

        $comments = Comment::where(['source_type' => $source_type])
                                ->where(['source_id' => $id])
                                ->orderBy('created_at', 'DESC')->get();

        $comments_count_type = DB::table('comments')
                                 ->where(['source_id' => $id])
                                 ->select('comment_type', DB::raw('count(comment_type) as total'))
                                 ->groupBy('comment_type')
                                 ->get();

        $data = [];
        $comments_graph = [];
        foreach ($comments_count_type as $key => $value) {

            $data['type'] = $value->comment_type;

            if($total_comments > 0){

                $data['percentage'] = round( ( $value->total / $total_comments ) * 100 );
            }else{

                $data['percentage'] = 0;
            }
            
            array_push($comments_graph, $data);
        }
        
        return array(
            'success' => true, 
            'total_comments' => $total_comments, 
            'comments' => $comments, 
            'comments_graph' => $comments_graph
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $data = $request->all();
        $name = $data['name'];
        $surname = $data['surname'];
        $account = $data['account'];
        $email = $data['email'];
        $user_created_id = $data['user_created_id'];
        $phone_number = $data['phone_number'];
        $product_id = $data['product_id'];
        $user_assigned = $data['user_assigned'];
        $source = $data['source'];
        $status = $data['status'];
        $title = $data['title'];
        $country = $data['country'];
        $city = $data['city'];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        try{
            DB::beginTransaction();

            $lead = Lead::create([
				'title' => $title,
				'name' => $name,
				'surname' => $surname,
				'phone_number' => $phone_number,
				'email' => $email,
				'city' => $city,
				'country' => $country,
				'account' => $account,
				'status' => $status,
				'user_assigned' => $user_assigned,
				'user_created_id' => $user_created_id,
				'product_id' => $product_id,
                'source' => $source['id'],
                'is_client' => 0,
            ]);

            DB::commit();
            return array('success' => true, 'message' => 'Lead successfully created', 'lead' => $lead);

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeClient(Request $request)
    {
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $data = $request->all();
        $name = $data['name'];
        $surname = $data['surname'];
        $account = $data['account'];
        $email = $data['email'];
        $user_created_id = $data['user_created_id'];
        $phone_number = $data['phone_number'];
        $product_id = $data['product_id'];
        $user_assigned = $data['user_assigned'];
        $source = $data['source'];
        $status = $data['status'];
        $title = $data['title'];
        $country = $data['country'];
        $city = $data['city'];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        try{
            DB::beginTransaction();

            $lead = Lead::create([
				'title' => $title,
				'name' => $name,
				'surname' => $surname,
				'phone_number' => $phone_number,
				'email' => $email,
				'city' => $city,
				'country' => $country,
				'account' => $account,
				'status' => $status,
				'user_assigned' => $user_assigned,
				'user_created_id' => $user_created_id,
				'product_id' => $product_id,
                'source' => $source['id'],
                'is_client' => 1,
            ]);

            DB::commit();
            return array('success' => true, 'message' => 'Lead successfully created', 'lead' => $lead);

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeFromWinsta(Request $request)
    {
        $request_user = ['user_id' => $request->session_user_id, 'name' => $request->session_user_name];

        $data = $request->all();        
        $name = $data['name'];
        $surname = $data['surname'];
        $phone_number = $data['phone_number'];
        $email = $data['email'];
        $user_created_id = $data['user_created_id'];
        $is_client = $data['is_client'];
        $product_id = $data['product_id'];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        try{
            DB::beginTransaction();

            $lead = Lead::create([
                'source' => null,
				'name' => $name,
				'surname' => $surname,
				'phone_number' => $phone_number,
				'email' => $email,
				'user_created_id' => $user_created_id,
				'user_assigned' => 0,
				'is_client' => $is_client,
				'status' => 1,
				'product_id' => $product_id,
				'account' => '-',
            ]);

            DB::commit();
            return array('success' => true, 'message' => 'Lead successfully created', 'lead' => $lead);

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $data = $request->all();
        $id = $data['id'];
        $name = $data['name'];
        $surname = $data['surname'];
        $account = $data['account'];
        $email = $data['email'];
        $user_created_id = $data['user_created_id'];
        $phone_number = $data['phone_number'];
        $product_id = $data['product_id'];
        $user_assigned = $data['user_assigned'];
        $source = $data['source'];
        $status = $data['status'];
        $title = $data['title'];
        $country = $data['country'];
        $city = $data['city'];

        try{
            DB::beginTransaction();

            $lead = Lead::where(['id' => $id])->update([
				'title' => $title,
				'name' => $name,
				'surname' => $surname,
				'phone_number' => $phone_number,
				'email' => $email,
				'city' => $city,
				'country' => $country,
				'account' => $account,
				'status' => $status,
				'user_assigned' => $user_assigned,
				'user_created_id' => $user_created_id,
				'product_id' => $product_id,
                'source' => $source['id']
            ]);

            $lead = Lead::find($id);

            DB::commit();
            return array('success' => true, 'lead' => Lead::find($id), 'message' => 'Lead updated successfully');

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $client = Lead::where(['id' => $id])->delete();
         return array('success' => true, 'client' => $client,'message' => 'Lead deleted successfully');
    }

        /**
     * Sees if the Settings from backend allows all to complete taks
     * or only assigned user. if only assigned user:
     * @param $id
     * @param Request $request
     * @return
     * @internal param $ [Auth]  $id Checks Logged in users id
     * @internal param $ [Model] $lead->user_assigned_id Checks the id of the user assigned to the task
     * If Auth and user_id allow complete else redirect back if all allowed excute
     * else stmt
     */
    public function updateStatus($id, Request $request)
    {
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $status = ( $request->status == 1 )? 'Complete' : 'Re-opened'; 

        Lead::where(['id' => $id])->update([
            'status' => $request->status
        ]);

        $lead = Lead::where(['id' => $id ])->first();

        event(new \App\Events\LeadAction($lead, $request_user,'updated_status'));

        return array('success' => true, 'status' => $lead->status, 'message' => "Lead $status" );
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function updateAssign($id, Request $request)
    {
        $data = $request->all();
        
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        Lead::where(['id' => $id ])->update([
            'user_assigned_id' => $data['user_assigned_id']
        ]);

        $lead = Lead::where(['id' => $id ])->first();
        
        event(new \App\Events\LeadAction($lead, $request_user,'updated_assign'));

        return array('success' => true, 'message' => 'New user assigned.');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function updateTime($id, Request $request)
    {
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $lead = Lead::findOrFail($id);

        $invoice = $lead->invoice;

        if(!$invoice) {
            $invoice = Invoice::create([
                'status' => 'draft',
                'client_id' => $lead->client->id
            ]);
            $lead->invoice_id = $invoice->id;
            $lead->save();
        } 

        InvoiceLine::create([
            'title' => $request->title,
            'comment' => $request->comment,
            'quantity' => $request->quantity,
            'type' => $request->type,
            'price' => $request->price,
            'invoice_id' => $invoice->id
        ]);

        event(new \App\Events\LeadAction($lead, $request_user,'updated_time'));

        return array('success' => true, 'message' =>  'Time has been updated');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function setCallback(Request $request)
    {
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $lead_id = $request->lead_id;
        $call_date = $request->date;
        $call_time = $request->time;
        $notes = $request->note;
        $call_sid = $request->call_sid;
        $status = 0;
        
        $lead = Lead::findOrFail($lead_id);
        
        $call_back_count = LeadsCallbacks::where(['lead_id' => $lead_id])->count();

        try{
            DB::beginTransaction();

            if($call_back_count > 0){

                LeadsCallbacks::where(['lead_id' => $lead_id])->update([
                    'user_id' => $request_user['user_id'],
                    'call_date' => $call_date,
                    'call_time' => $call_time,
                    'notes' => $notes,
                    'status' => $status,
                    'call_sid' => $call_sid
                ]);

                event(new \App\Events\LeadAction($lead, $request_user,'updated_callback'));

            }else{

                $lead_callback = LeadsCallbacks::create([
                            'lead_id' => $lead_id,
                            'user_id' => $request_user['user_id'],
                            'call_date' => $call_date,
                            'call_time' => $call_time,
                            'notes' => $notes,
                            'status' => $status,
                            'call_sid' => $call_sid
                        ]);
                
                event(new \App\Events\LeadAction($lead, $request_user,'created_callback'));
            }

            $comment_check = Comment::where([
                'comment_type' => 'CB',
                'source_type' => 'App\Lead' , 
                'source_id' => $lead_id , 
                'user_id' => $request_user['user_id'],
            ])->count();
            
            if($comment_check > 0){
                Comment::where([
                    'comment_type' => 'CB',
                    'source_type' => 'App\Lead' , 
                    'source_id' => $lead_id , 
                    'user_id' => $request_user['user_id'],
                ])->update([
                    'description' => $notes
                ]);

            }else{
                $comment = Comment::create([
                    'description' => $notes,
                    'comment_type' => 'CB',
                    'source_type' => 'App\Lead' , 
                    'source_id' => $lead_id , 
                    'user_id' => $request_user['user_id'],
                    'user_name' => $request_user['name'] 
                ]);
            }

            DB::commit();

            return array('success' => true, 'lead' => $lead);

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }

    }

    public function getUserCallBacks(){

        $call_backs = LeadsCallbacks::with('lead')->where(['user_id' => Auth::user()->id])->whereDate('call_date', '>=', Carbon::now())->get();

        return array('success' => true, 'call_backs' => $call_backs);
    }

    public function getLeadsCount($type = null){

        if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3 || Auth::user()->role_id == 4){

            $count_assigned = Lead::where(['is_client' => 0])->where(['user_assigned' => Auth::user()->id])->count();    
    
            if(is_null($type) || $type == -1){
                
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 0])->where(['user_assigned' => Auth::user()->id])->orderBy('updated_at', 'DESC')->get();
    
            }else if($type == 1){ 
    
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 0])->where(['user_assigned' => Auth::user()->id])->where('user_assigned', '>', 0)->orderBy('updated_at', 'DESC')->get();
    
            }else if($type == 0){ 
    
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 0])->where(['user_assigned' => Auth::user()->id])->where('user_assigned', '=', 0)->orderBy('updated_at', 'DESC')->get();
    
            }           
            
            return array(
                'success' => true,
                'leads' => $this->compactLeads($leads), 
                'count_leads' => Lead::where(['is_client' => 0])->where(['user_assigned' => Auth::user()->id])->count(), 
                'count_assigned' => $count_assigned, 
                'assignees' => User::where(['activated' => 1])->whereIn('role_id', [2,3,4])->orderBy('name', 'ASC')->get(), 
                'lead_owners' => User::where(['activated' => 1])->whereIn('role_id', [1,2])->orderBy('name', 'ASC')->get(), 
                'packages' => Product::get(), 
                'sources' => LeadSource::get(), 
            );
        }else{
            $count_assigned = Lead::where('user_assigned', '>', 0)->where(['is_client' => 0])->count();    
    
            $count_unassigned = Lead::whereNull('user_assigned')->where(['is_client' => 0])->count();
    
            if(is_null($type) || $type == -1){
                
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 0])->orderBy('updated_at', 'DESC')->get();
    
            }else if($type == 1){ 
    
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 0])->where('user_assigned', '>', 0)->orderBy('updated_at', 'DESC')->get();
    
            }else if($type == 0){ 
    
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 0])->whereNull('user_assigned')->orderBy('updated_at', 'DESC')->get();
    
            }           
            
            return array(
                'success' => true,
                'leads' => $this->compactLeads($leads), 
                'count_leads' => Lead::where(['is_client' => 0])->count(), 
                'count_unassigned' => $count_unassigned, 
                'count_assigned' => $count_assigned, 
                'assignees' => User::where(['activated' => 1])->whereIn('role_id', [2,3,4])->orderBy('name', 'ASC')->get(), 
                'lead_owners' => User::where(['activated' => 1])->whereIn('role_id', [1,2])->orderBy('name', 'ASC')->get(), 
                'packages' => Product::get(), 
                'sources' => LeadSource::get(), 
            );
        }
    }

    public function getClientCount($type = null){

        if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3 || Auth::user()->role_id == 4){

            $count_assigned = Lead::where('user_assigned', '>', 0)->where(['is_client' => 1])->where(['user_assigned' => Auth::user()->id])->count();    

            if(is_null($type) || $type == -1){
                
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 1])->where(['user_assigned' => Auth::user()->id])->orderBy('updated_at', 'DESC')->get();
    
            }else if($type == 1){ 
    
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 1])->where(['user_assigned' => Auth::user()->id])->where('user_assigned', '>', 0)->orderBy('updated_at', 'DESC')->get();
    
            }else if($type == 0){ 
    
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 1])->where(['user_assigned' => Auth::user()->id])->where('user_assigned', '=', 0)->orWhereNull('user_assigned')->orderBy('updated_at', 'DESC')->get();
    
            }  
            return array(
                'success' => true,
                'leads' => $this->compactLeads($leads), 
                'count_leads' => Lead::where(['is_client' => 1])->where(['user_assigned' => Auth::user()->id])->count(), 
                'count_assigned' => $count_assigned, 
                'assignees' => User::where(['activated' => 1])->whereIn('role_id', [2,3,4])->orderBy('name', 'ASC')->get(), 
                'lead_owners' => User::where(['activated' => 1])->whereIn('role_id', [1,2])->orderBy('name', 'ASC')->get(), 
                'packages' => Product::get(), 
                'sources' => LeadSource::get(), 
            );         
            
        }else{
            $count_assigned = Lead::where('user_assigned', '>', 0)->where(['is_client' => 1])->count();    
    
            $count_unassigned = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 1])->whereNull('user_assigned')->orderBy('updated_at', 'DESC')->count();
    
            if(is_null($type) || $type == -1){
                
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 1])->orderBy('updated_at', 'DESC')->get();
    
            }else if($type == 1){ 
    
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 1])->where('user_assigned', '>', 0)->orderBy('updated_at', 'DESC')->get();
    
            }else if($type == 0){ 
    
                $leads = Lead::with('product')->with('lead_source')->with('creator')->with('user')->with('comments')->where(['is_client' => 1])->whereNull('user_assigned')->orderBy('updated_at', 'DESC')->get();
    
            } 

            return array(
                'success' => true,
                'leads' => $this->compactLeads($leads), 
                'count_leads' => Lead::where(['is_client' => 1])->where(['user_assigned' => Auth::user()->id])->count(), 
                'count_assigned' => $count_assigned, 
                'assignees' => User::where(['activated' => 1])->whereIn('role_id', [2,3,4])->orderBy('name', 'ASC')->get(), 
                'lead_owners' => User::where(['activated' => 1])->whereIn('role_id', [1,2])->orderBy('name', 'ASC')->get(), 
                'packages' => Product::get(), 
                'sources' => LeadSource::get(), 
            );          
        }

    }

    public function getLastActivity($lead_id){
        return Comment::where(['source_id' => $lead_id])->latest()->first();
    }

    public function compactLeads($leads = null){

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
            $data->status  = $status;
            $data->lead  = $lead;

            array_push($compact_leads, $data);

        }
        return $compact_leads;
    }

    public function getSelectOptions(){
        return array(
            'assignees' => User::where(['activated' => 1])->whereIn('role_id', [2,3,4])->orderBy('name', 'ASC')->get(), 
            'lead_owners' => User::where(['activated' => 1])->whereIn('role_id', [1,2])->orderBy('name', 'ASC')->get(), 
            'packages' => Product::get(), 
            'sources' => LeadSource::get(), 
        );
    }

}
