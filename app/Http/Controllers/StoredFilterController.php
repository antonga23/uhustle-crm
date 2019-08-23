<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\User;
use App\Lead;
use App\Product;
use App\Comment;
use App\LeadSource;
use App\StoredFilterAttribute;
use App\StoredFilter;
use Illuminate\Http\Request;

class StoredFilterController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $filter = $request->filter;
        $type = $request->type;
        $filter_title = $filter['title'];

        try{
            DB::beginTransaction();

            $store_filter = StoredFilter::create([
                'user_id' => Auth::user()->id,
                'type' => $type,
                'filter_title' => $filter_title
            ]);

            foreach($filter as $key => $value){
                StoredFilterAttribute::create([
                    'stored_filter_id' => $store_filter->id,
                    'key' => $key,
                    'value' => $value
                ]);
            }

            $data = $this->getCustomFilters($type);

            DB::commit();
            return array('success' => true, 'filters' => $data, 'message' => 'Filter saved successfully');

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }
    public function getCustomFilters($type = null){

        $type_val = ($type == 'leads')? 0 : 1; 

        $filters = StoredFilter::with('attributes')->where(['user_id' => Auth::user()->id])->where(['type' => $type])->get();
      
        $data = [];
        foreach($filters as $key => $filter){
           $temp = new \StdClass();
  
           $temp->title = $filter->filter_title;
           $temp->id = $filter->id;
           
           foreach($filter->attributes as $index => $attribute){
              
              if($attribute->key == 'title')
                 continue;
  
              if($attribute->key ==  'search')
                 $temp->search = $attribute->value;
  
              if($attribute->key ==  'user_created_id')
                 $temp->user_created_id = $attribute->value;
  
              if($attribute->key ==  'user_assigned')
                 $temp->user_assigned = $attribute->value;
  
              if($attribute->key ==  'source')
                 $temp->source = $attribute->value;
  
              if($attribute->key ==  'product_id')
                 $temp->product_id = $attribute->value;
  
              if($attribute->key ==  'status')
                 $temp->status = $attribute->value;                  
           }

            $temp->counts = $this->getFilterCounts($temp, $type_val);

            array_push($data, $temp);
        }

        return $data;
    }

   public function getFilterCounts($filter = [], $type = null){
        $sql = '';
        foreach($filter as $key => $value){
        if($key == 'search'){
            $sql .= " (name LIKE '%$value%' OR surname LIKE '%$value%' OR email LIKE '%$value%') ";
        }
        if($key == 'user_created_id' && !is_null($value)){
            $sql .= " AND user_created_id = '$value' ";
        }
        if($key == 'user_assigned' && !is_null($value)){
            $sql .= " AND user_assigned = '$value' ";
        }
        if($key == 'source' && !is_null($value)){
            $sql .= " AND source = '$value' ";
        }
        if($key == 'product_id' && !is_null($value)){
            $sql .= " AND product_id = '$value' ";
        }
        if($key == 'status' && !is_null($value)){
            $sql .= " AND status = '$value' ";
        }
        }

        $counts = Lead::with('product')->with('lead_source')->with('creator')->with('comments')
            ->whereRaw($sql)
            ->where(['is_client' => $type])
            ->orderBy('updated_at', 'DESC')
            ->count();
        return $counts;
    }

    public function filterLeadsData(Request $request, $type = null){

        $data = $request->filter;
        $filter = $data['filter'];
        $search = $filter['search'];
        $user_created_id = $filter['user_created_id'];
        $user_assigned = $filter['user_assigned'];
        $source = $filter['source'];
        $product_id = $filter['product_id'];
        $status = $filter['status'];
        
        $sql = '';
        
        foreach($filter as $key => $value){
            if($key == 'search'){
                $sql .= " (name LIKE '%$value%' OR surname LIKE '%$value%' OR email LIKE '%$value%') ";
            }
            if($key == 'user_created_id' && !is_null($value)){
                $sql .= " AND user_created_id = '$value' ";
            }
            if($key == 'user_assigned' && !is_null($value)){
                $sql .= " AND user_assigned = '$value' ";
            }
            if($key == 'source' && !is_null($value)){
                $sql .= " AND source = '$value' ";
            }
            if($key == 'product_id' && !is_null($value)){
                $sql .= " AND product_id = '$value' ";
            }
            if($key == 'status' && !is_null($value)){
                $sql .= " AND status = '$value' ";
            }
        }

        if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3 || Auth::user()->role_id == 4){

            $count_assigned = Lead::where(['is_client' => $type])->where(['user_assigned' => Auth::user()->id])->count();    
    
            $leads = Lead::with('product')->with('lead_source')->with('creator')->with('comments')
                    ->whereRaw($sql)
                    ->where(['user_assigned' => Auth::user()->id])
                    ->where(['is_client' => $type])
                    ->orderBy('updated_at', 'DESC')
                    ->get();       
            
            return array(
                'success' => true,
                'leads' => $this->compactLeads($leads), 
                'count_leads' => Lead::where(['is_client' => $type])->where(['user_assigned' => Auth::user()->id])->count(), 
                'count_assigned' => $count_assigned, 
                'assignees' => User::where(['activated' => 1])->whereIn('role_id', [2,3,4])->orderBy('name', 'ASC')->get(), 
                'lead_owners' => User::where(['activated' => 1])->whereIn('role_id', [1,2])->orderBy('name', 'ASC')->get(), 
                'packages' => Product::get(), 
                'sources' => LeadSource::get(), 
            );
        }else{
            $count_assigned = Lead::where('user_assigned', '>', 0)->where(['is_client' => $type])->count();    
    
            $count_unassigned = Lead::whereNull('user_assigned')->where(['is_client' => $type])->count();
            
            $leads = Lead::with('product')->with('lead_source')->with('creator')->with('comments')
                                ->whereRaw($sql)
                                ->where(['is_client' => $type])
                                ->orderBy('updated_at', 'DESC')
                                ->get();
            
            return array(
                'success' => true,
                'leads' => $this->compactLeads($leads), 
                'count_leads' => Lead::where(['is_client' => $type])->count(), 
                'count_unassigned' => $count_unassigned, 
                'count_assigned' => $count_assigned, 
                'assignees' => User::where(['activated' => 1])->whereIn('role_id', [2,3,4])->orderBy('name', 'ASC')->get(), 
                'lead_owners' => User::where(['activated' => 1])->whereIn('role_id', [1,2])->orderBy('name', 'ASC')->get(), 
                'packages' => Product::get(), 
                'sources' => LeadSource::get(), 
            );
        }     
    }

    public function filterClientsData(Request $request){

        $data = $request->filter;
        $filter = $data['filter'];
        $search = $filter['search'];
        $user_created_id = $filter['user_created_id'];
        $user_assigned = $filter['user_assigned'];
        $source = $filter['source'];
        $product_id = $filter['product_id'];
        $status = $filter['status'];
        
        $sql = '';
        
        foreach($filter as $key => $value){
            if($key == 'search'){
                $sql .= " (name LIKE '%$value%' OR surname LIKE '%$value%' OR email LIKE '%$value%') ";
            }
            if($key == 'user_created_id' && !is_null($value)){
                $sql .= " AND user_created_id = '$value' ";
            }
            if($key == 'user_assigned' && !is_null($value)){
                $sql .= " AND user_assigned = '$value' ";
            }
            if($key == 'source' && !is_null($value)){
                $sql .= " AND source = '$value' ";
            }
            if($key == 'product_id' && !is_null($value)){
                $sql .= " AND product_id = '$value' ";
            }
            if($key == 'status' && !is_null($value)){
                $sql .= " AND status = '$value' ";
            }
        }

        if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3 || Auth::user()->role_id == 4){

            $count_assigned = Lead::where(['is_client' => 1])->where(['user_assigned' => Auth::user()->id])->count();    
    
            $leads = Lead::with('product')->with('lead_source')->with('creator')->with('comments')
                    ->whereRaw($sql)
                    ->where(['user_assigned' => Auth::user()->id])
                    ->where(['is_client' => 1])
                    ->orderBy('updated_at', 'DESC')
                    ->get();       
            
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
    
            $count_unassigned = Lead::whereNull('user_assigned')->where(['is_client' => 1])->count();
            
            $leads = Lead::with('product')->with('lead_source')->with('creator')->with('comments')
                                ->whereRaw($sql)
                                ->where(['is_client' => 1])
                                ->orderBy('updated_at', 'DESC')
                                ->get();
            
            return array(
                'success' => true,
                'leads' => $this->compactLeads($leads), 
                'count_leads' => Lead::where(['is_client' => 1])->count(), 
                'count_unassigned' => $count_unassigned, 
                'count_assigned' => $count_assigned, 
                'assignees' => User::where(['activated' => 1])->whereIn('role_id', [2,3,4])->orderBy('name', 'ASC')->get(), 
                'lead_owners' => User::where(['activated' => 1])->whereIn('role_id', [1,2])->orderBy('name', 'ASC')->get(), 
                'packages' => Product::get(), 
                'sources' => LeadSource::get(), 
            );
        }     
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

    public function getLastActivity($lead_id){
        return Comment::where(['source_id' => $lead_id])->latest()->first();
    }

    public function filterCounts(Request $request,$type = null){
        
        $filter = $request->filter;
        
        $search = $filter['search'];
        $user_created_id = $filter['user_created_id'];
        $user_assigned = $filter['user_assigned'];
        $source = $filter['source'];
        $product_id = $filter['product_id'];
        $status = $filter['status'];
        
        $sql = '';
        
        foreach($filter as $key => $value){
            if($key == 'search'){
                $sql .= " (name LIKE '%$value%' OR surname LIKE '%$value%' OR email LIKE '%$value%') ";
            }
            if($key == 'user_created_id' && !is_null($value)){
                $sql .= " AND user_created_id = '$value' ";
            }
            if($key == 'user_assigned' && !is_null($value)){
                $sql .= " AND user_assigned = '$value' ";
            }
            if($key == 'source' && !is_null($value)){
                $sql .= " AND source = '$value' ";
            }
            if($key == 'product_id' && !is_null($value)){
                $sql .= " AND product_id = '$value' ";
            }
            if($key == 'status' && !is_null($value)){
                $sql .= " AND status = '$value' ";
            }
        }

        $counts = Lead::with('product')->with('lead_source')->with('creator')->with('comments')
            ->whereRaw($sql)
            ->where(['is_client' => $type])
            ->orderBy('updated_at', 'DESC')
            ->count();  
                    
        return array(
            'success' => true,
            'counts' => $counts
        );
    }

    public function destroy($id = null, $type = null){
        StoredFilter::where(['id' => $id])->delete();
        StoredFilterAttribute::where(['stored_filter_id' => $id])->delete();

        $data = $this->getCustomFilters($type);

        return array(
            'success' => true,
            'filters' => $data,
            'message' => "Custom Filter deleted successfully"
        );
    }
}
