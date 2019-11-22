<?php

namespace App\Http\Controllers;

use Auth;
use App\Lead;
use App\StoredFilter;
use App\SystemSettings;
use App\DialerPermissions;
use App\Comment;
use App\Module;
use App\ModuleItem;
use App\ModuleItemMeta;
use App\ModuleCustomFields;
use App\User;
use App\Role;
use App\Product;
use App\LeadSource;
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
   public function index($item_id = null)
   {
      $auto_dialer_settings = DialerPermissions::where(['role_id' => Auth::user()->role_id])->first();

      if(is_null($item_id)){
          $custom_fields = [];
          $item_id = null;
          return view('pages.workstation')
              ->with(['active'=> 'workstation'])
              ->with(['item_id'=> $item_id])
              ->with(['custom_fields'=> $custom_fields])
              ->with(['sources'=> LeadSource::get()])
              ->with(['lead_id'=> ''])
              ->with(['auto_dialer_settings' => $auto_dialer_settings]);

      }else{

        $module_item = ModuleItem::find($item_id);
        
        $custom_fields = ModuleCustomFields::where(['module_id' => $module_item['module_id']])->get();
        
         return view('pages.workstation')
            ->with(['active'=> 'workstation'])
            ->with(['item_id'=> $item_id])
            ->with(['custom_fields'=> $custom_fields])
            ->with(['sources'=> LeadSource::get()])
            ->with(['auto_dialer_settings' => $auto_dialer_settings]);
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

   public function preferences()
   {
      return view('pages.preferences')->with(['active'=> 'preferences']);
   }
   
   public function transactions()
   {
      return view('pages.transactions')->with(['active'=> 'transactions']);
   }
   
   public function inventory()
   {
      return view('pages.inventory')->with(['active'=> 'inventory']);
   }

   public function loadModulePage($type = null)
   {
      $module = Module::with('module_fields')->where(['tag' => $type])->first();

      $active_users = User::where(['activated' => 1])->get();

      $active_roles = Role::where(['status' => 1])->get();
      
      $sources = LeadSource::get();

      $packages = Product::get();

      $custom_fields = ModuleCustomFields::where(['module_id' => $module->id])->get();

      $custom_filters = StoredFilter::with('attributes')->where(['user_id' => Auth::user()->id])->where(['type' => 'leads'])->get();
      
      $data = [];

      foreach($custom_filters as $key => $filter){
         $temp = new \StdClass();

         $temp->id = $filter->id;
         $temp->title = $filter->filter_title;
         
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

         $temp->counts = $this->getFilterCounts($temp, 0);

         array_push($data, $temp);
      }
      
      return view('pages.modules')->with([
         'active'=> $type,
         'module' => $module,
         'sources' => json_encode($sources),
         'packages' => json_encode($packages),
         'active_users' => json_encode($active_users),
         'active_roles' => json_encode($active_roles),
         'custom_fields' => json_encode($custom_fields),
         'custom_filters' => json_encode($data),
         'has_interaction' => session('CommentExist')
      ]);
   }


   public function contacts()
   {
      $custom_filters = StoredFilter::with('attributes')->where(['user_id' => Auth::user()->id])->where(['type' => 'contacts'])->get();
      
      $data = [];

      foreach($custom_filters as $key => $filter){
         $temp = new \StdClass();

         $temp->id = $filter->id;
         $temp->title = $filter->filter_title;
         
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

         $temp->counts = $this->getFilterCounts($temp, 1);

         array_push($data, $temp);
      }
      
      return view('pages.contacts')->with([
         'active'=> 'contacts',
         'custom_filters' => json_encode($data),
         'has_interaction' => session('CommentExist')
      ]);
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

    $counts = Lead::with('product')->with('source')->with('creator')->with('comments')
          ->whereRaw($sql)
          ->where(['is_client' => $type])
          ->orderBy('updated_at', 'DESC')
          ->count();
    return $counts;
  }
}
