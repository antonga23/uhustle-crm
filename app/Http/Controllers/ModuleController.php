<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Role;
use App\Product;
use App\User;
use App\LeadSource;
use App\Module;
use Illuminate\Support\Facades\Log;
use App\ModuleCustomFields;
use App\ModuleItem;
use App\ModuleItemMeta;
use App\SystemSettings;
use Illuminate\Http\Request;

class ModuleController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $modules = Module::with('module_fields')->get();
        
         return array('success' => true, 'modules' => $this->compactModules($modules) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $data = $request->all();
        $display_name = $data['display_name'];
        $description = $data['description'];
        $module_fields = $data['module_fields'];

        try{
            DB::beginTransaction();

            $module = Module::create([
              'tag' => strtolower(str_replace(' ','_',$display_name)),
              'display_name' => $display_name,
              'description' => $description,
            ]);

            foreach($module_fields as $key => $value){
                
                $can_read = ( !isset($value['can_read']) || is_null($value['can_read']) )? null : implode(',',$value['can_read']) ;
                $can_edit = ( !isset($value['can_edit']) || is_null($value['can_edit']) )? null : implode(',',$value['can_edit']) ;
                $required = ( !isset($value['required']) || is_null($value['required']) )? null : $value['required'] ;

                ModuleCustomFields::create([
                    'module_id' => $module->id,
                    'name' => strtolower( str_replace(' ','_',$value['display_name'] ) ) ,
                    'display_name' => ucwords( str_replace('_',' ',$value['display_name'] ) ) ,
                    'type' => $value['type'],
                    'required' => $required,
                    'can_read' => $can_read,
                    'can_edit' => $can_edit
                ]);
            }
            DB::commit();

            $module = Module::with('module_fields')->where(['id' => $module->id])->get();

            
            return array('success' => true, 'message' => 'Module successfully created', 'module' => $this->compactModules($module));

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $data = $request->all();
        $id = $data['id'];
        $display_name = $data['display_name'];
        $description = $data['description'];
        $module_fields = $data['module_fields'];

        try{
            DB::beginTransaction();

            Module::find($id)->update([
              'tag' => strtolower(str_replace(' ','_',$display_name)),
              'display_name' => $display_name,
              'description' => $description,
            ]);

            // $existing = ModuleCustomFields::where(['module_id' => $id])->delete();

            foreach($module_fields as $key => $value){
                
                $can_read = ( !isset($value['can_read']) || is_null($value['can_read']) )? null : implode(',',$value['can_read']) ;
                $can_edit = ( !isset($value['can_edit']) || is_null($value['can_edit']) )? null : implode(',',$value['can_edit']) ;
                $required = ( !isset($value['required']) || is_null($value['required']) )? null : $value['required'] ;
                
                ModuleCustomFields::where(['id' => $value['id']])->update([
                    'module_id' => $id,
                    'name' => strtolower( str_replace(' ','_',$value['display_name'] ) ) ,
                    'display_name' => ucwords( str_replace('_',' ',$value['display_name'] ) ) ,
                    'type' => $value['type'],
                    'required' => $required,
                    'can_read' => $can_read,
                    'can_edit' => $can_edit
                ]);
            }
            
            DB::commit();

            $module = Module::with('module_fields')->where(['id' => $id])->get();

            return array('success' => true, 'message' => 'Module successfully updated', 'module' => $this->compactModules($module) );

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    public function compactModules($modules = null){

      $holder = [];
      foreach ($modules as $i => $module) {
        $data = new \StdClass();

        $data->id = $module->id;
        $data->tag = $module->tag;
        $data->description = $module->description;
        $data->display_name = $module->display_name;

        $field_holder = [];
        foreach ($module->module_fields as $j => $field) {
           $field_data = new \StdClass();
           $field_data->id = $field->id;
           $field_data->module_id = $field->module_id;
           $field_data->name = $field->name;
           $field_data->display_name = $field->display_name;
           $field_data->type = $field->type;
           $field_data->required = $field->required;

           $can_edit_roles = Role::whereIn('id', explode(',',$field->can_edit))->get();

           $can_edit = [];
           foreach ($can_edit_roles as $k => $can_edit_role) {
             array_push($can_edit, $can_edit_role->id);
           }

           $can_read_roles = Role::whereIn('id', explode(',',$field->can_read))->get();

           $can_read = [];
           foreach ($can_read_roles as $k => $can_read_role) {
             array_push($can_read, $can_read_role->id);
           }

           $field_data->can_edit = $can_edit;
           $field_data->can_read = $can_read;
           array_push($field_holder, $field_data);
        }

        $data->module_fields = $field_holder;

        array_push($holder, $data);
      }
      
      return $holder;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = null)
    {
        try{
            DB::beginTransaction();

            Module::find($id)->delete();

            ModuleCustomFields::where(['module_id' => $id])->delete();
            
            ModuleItem::where(['module_id' => $id])->delete();

            ModuleItemMeta::where(['item_id' => $id])->delete();

            DB::commit();
            return array('success' => true, 'message' => 'Module successfully deleted' );

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    public function getItem($item_id = null){

      $module_item = ModuleItem::with('item_meta')->where(['id' => $item_id])->get();

      $compact_item = $this->compactModuleItems($module_item);

      $item = $compact_item['items'][0];

      return ['success' => true, 'item' => $item];
    }

    public function getItems($module = null){

      $user_id = Auth::user()->id;

      $preferences = SystemSettings::where(['user_id' => Auth::user()->id])
                                    ->where(['setting' => 'max_table_rows'])
                                    ->select('value')
                                    ->first();

      $module = Module::with('module_fields')->where(['tag' => $module])->first();

      $module_items = ModuleItem::with('item_meta')->where(['module_id' => $module['id']])->get()->take($preferences['value']);

      $items = $this->compactModuleItems($module_items);

      return $items;
    }

    public function getAllItems(){

      $module_items = ModuleItem::with('item_meta')->get();

      $items = $this->compactModuleItems($module_items);

      return ['leads' => $items];
    }

    public function getDisplayItems(){

      $module_items = ModuleItem::with('item_meta')->get();

      $items = $this->compactDisplayModuleItems($module_items);

      return ['leads' => $items];
    }

    public function getSingleItem($id){

      $module = Module::with('module_fields')->where(['tag' => 'leads'])->first();

      $module_items = ModuleItem::with('item_meta')->where(['id' => $id])->get();

      $items = $this->compactModuleItems($module_items);

      return ['leads' => $items];
    }

  public function compactModuleItems($module_items = null){
    
    $data = [];

    $display_data = [];

    $count_assigned = 0;

    $count_unassigned = 0;

    foreach ($module_items as $key => $item) {

        $item_temp = new \StdClass();

        $display_item_temp = new \StdClass();

        $fields_array = [];

        $display_array = [];

        foreach ($item->item_meta as $k => $meta) {

          $meta_name = ModuleCustomFields::where(['id' => $meta->custom_field_id])
                                          ->select('id','name','display_name', 'can_edit', 'can_read')
                                          ->first();

          if($meta_name->id == $meta->custom_field_id){


            $fields_array['id'] = $item->id;

            $display_array['id'] = $item->id;

            if($meta_name->name == 'assignee'){ 
              
              $user = User::where(['id' => $meta->custom_field_value])->select('id','name','lastname as surname')->first();
              
              $display_array[$meta_name->name] = $user['name'] . ' ' . $user['lastname'];

              $fields_array[$meta_name->name] = [
                  'custom_field_id' => $meta->custom_field_id,
                  'meta_id' => $meta->id,
                  'meta_value' => $user
                ];

            }else if ($meta_name->name == 'owner'){

              $user = User::where(['id' => $meta->custom_field_value])->select('id','name','lastname as surname')->first();

              $display_array[$meta_name->name] = $user['name'] . ' ' . $user['lastname'];

              $fields_array[$meta_name->name] = [
                  'custom_field_id' => $meta->custom_field_id,
                  'meta_id' => $meta->id,
                  'meta_value' =>  $user
                ];
            }else if ($meta_name->name == 'product'){

              $product = Product::where(['id' => $meta->custom_field_value])->first();

              $display_array[$meta_name->name] = $product['name'];

              $fields_array[$meta_name->name] = [
                  'custom_field_id' => $meta->custom_field_id,
                  'meta_id' => $meta->id,
                  'meta_value' => $product
                ];

            }else if ($meta_name->name == 'source'){

              $lead_source = LeadSource::where(['id' => $meta->custom_field_value])->select('id','name')->first();

              $display_array[$meta_name->name] = $lead_source['name'];

              $fields_array[$meta_name->name] = [
                  'custom_field_id' => $meta->custom_field_id,
                  'meta_id' => $meta->id,
                  'meta_value' => $lead_source
                ];

            }else if ($meta_name->name == 'status'){
              
              switch ($meta->custom_field_value) {
                case 0:
                    continue;
                    $status = 'Canceled';
                  break;
                case 1:
                    $status = 'Active';
                    $display_array[$meta_name->name] = $status;
                  break;
                case 2:
                    continue;
                    $status = 'Inactive';
                  break;
                case 3:
                    continue;
                    $status = 'Disabled';
                  break;
                
                default:
                    $status = 'Active';
                  break;
              }

              $fields_array[$meta_name->name] =  [
                'custom_field_id' => $meta->custom_field_id,
                'meta_id' => $meta->id,
                'meta_value' => $meta->custom_field_value
              ];
              
            }else{

              $display_array[$meta_name->name] = $meta->custom_field_value;

              $fields_array[$meta_name->name] = [
                'custom_field_id' => $meta->custom_field_id,
                'meta_id' => $meta->id,
                'meta_value' =>$meta->custom_field_value
              ];
            }

            if($meta_name->name == 'assignee' && $meta->custom_field_value >= 1 && $item->id == $meta->item_id){
              $fields_array['assigned'] = true;
              $display_array['assigned'] = true;
              $count_assigned++;
            }else if($meta_name->name == 'assignee' && $meta->custom_field_value == '0' && $item->id == $meta->item_id){
              $fields_array['assigned'] = false;
              $count_unassigned++;
            }else if($meta_name->name == 'assignee' && is_null($meta->custom_field_value) && $item->id == $meta->item_id){
              $fields_array['assigned'] = false;
              $display_array['assigned'] = false;
              $count_unassigned++;
            }
          }
        }

        $item_temp->item = $fields_array;

        array_push($data, $item_temp);

        array_push($display_data, $display_array);
    }
    
    return [ 
            'success' => true,
            'items' => $data, 
            'display_items' => $display_data,  
            'count_assigned' => $count_assigned, 
            'count_unassigned' => $count_unassigned, 
        ];
  }


  public function compactDisplayModuleItems($module_items = null){
    
    $data = [];

    $display_data = [];

    $count_assigned = 0;

    $count_unassigned = 0;

    foreach ($module_items as $key => $item) {

        $item_temp = new \StdClass();

        $display_item_temp = new \StdClass();

        $fields_array = [];

        $display_array = [];

        foreach ($item->item_meta as $k => $meta) {

          $meta_name = ModuleCustomFields::where(['id' => $meta->custom_field_id])
                                          ->select('id','name','display_name', 'can_edit', 'can_read')
                                          ->first();

          if($meta_name->id == $meta->custom_field_id){

            $display_array['id'] = $item->id;

            if($meta_name->name == 'assignee'){ 
              
              $user = User::where(['id' => $meta->custom_field_value])->select('id','name','lastname as surname')->first();
              
              $display_array[$meta_name->name] = $user['name'] . ' ' . $user['lastname'];

            }else if ($meta_name->name == 'owner'){

              $user = User::where(['id' => $meta->custom_field_value])->select('id','name','lastname as surname')->first();

              $display_array[$meta_name->name] = $user['name'] . ' ' . $user['lastname'];

            }else if ($meta_name->name == 'product'){

              $product = Product::where(['id' => $meta->custom_field_value])->first();

              $display_array[$meta_name->name] = $product['name'];

            }else if ($meta_name->name == 'source'){

              $lead_source = LeadSource::where(['id' => $meta->custom_field_value])->select('id','name')->first();

              $display_array[$meta_name->name] = $lead_source['name'];

            }else if ($meta_name->name == 'status'){
              
              switch ($meta->custom_field_value) {
                case 0:
                    continue;
                    $status = 'Canceled';
                  break;
                case 1:
                    $status = 'Active';
                    $display_array[$meta_name->name] = $status;
                  break;
                case 2:
                    continue;
                    $status = 'Inactive';
                  break;
                case 3:
                    continue;
                    $status = 'Disabled';
                  break;
                
                default:
                    $status = 'Active';
                  break;
              }

              
            }else{
              $display_array[$meta_name->name] = $meta->custom_field_value;
            }

            if($meta_name->name == 'assignee' && $meta->custom_field_value >= 1 && $item->id == $meta->item_id){
              $display_array['assigned'] = true;
              $count_assigned++;
            }else if($meta_name->name == 'assignee' && $meta->custom_field_value == '0' && $item->id == $meta->item_id){
              $count_unassigned++;
            }else if($meta_name->name == 'assignee' && is_null($meta->custom_field_value) && $item->id == $meta->item_id){
              $display_array['assigned'] = false;
              $count_unassigned++;
            }
          }
        }

        array_push($display_data, $display_array);
    }
    
    return [ 
            'success' => true,
            'display_items' => $display_data,  
            'count_assigned' => $count_assigned, 
            'count_unassigned' => $count_unassigned, 
        ];
  }


  public function addItem(Request $request){

    $item = $request->item;

    try{
      DB::beginTransaction();

      ModuleItem::create([
        'module_id' => $item['id']
      ]);

      foreach($item['module_fields'] as $key => $value){
        ModuleItemMeta::create([
          'item_id' => $value['module_id'],
          'custom_field_id' => $value['id'],
          'custom_field_value' => isset($value['value'])? $value['value'] : null,
        ]);
      }

      DB::commit();
      return array('success' => true, 'message' => 'Item successfully added.' );

    }catch(\QueryException $e){
        DB::rollback();
        return array('success' =>false, 'message' => $e->getMessage());
    }
  }

  public function deleteItem($id = null){

    try{
      DB::beginTransaction();

      ModuleItem::find($id)->delete();;

      ModuleItemMeta::where(['item_id' => $id])->delete();

      DB::commit();
      return array('success' => true, 'message' => 'Item successfully deleted.' );

    }catch(\QueryException $e){
        DB::rollback();
        return array('success' =>false, 'message' => $e->getMessage());
    }
  }

  public function updateItem(Request $request){

    $item_data = $request->all();

    try{
      DB::beginTransaction();

      foreach($item_data as $key => $item){
        switch ($key) {
          case 'source':
          case 'product':
          case 'assignee':
          case 'owner':
              ModuleItemMeta::where(['id' => $item['meta_id']])->update([
                'custom_field_value' => $item['meta_value']['id']
              ]);
            break;
          
          default:
              ModuleItemMeta::where(['id' => $item['meta_id']])->update([
                'custom_field_value' => $item['meta_value']
              ]);
            break;
        }
      }

      DB::commit();
      return array('success' => true, 'message' => 'Item successfully update.' );

    }catch(\QueryException $e){
        DB::rollback();
        return array('success' =>false, 'message' => $e->getMessage());
    }
  }

  public function massAssign(Request $request){

      $data = $request->all();
      
      $num_leads = count($data['lead_ids']);

      $num_user_assigned = count($data['user_assigned']);

      $num_lead_owner = count($data['lead_owner']);

      try{
          DB::beginTransaction();

          if($num_user_assigned > 0){

            $assignee_modulus = $num_leads % $num_user_assigned;
            
            if($assignee_modulus == 0){
    
              $num_in_batch = $num_leads / $num_user_assigned;
    
              $batches = $num_leads / $num_in_batch;
    
              $lead_id_index = 0;

              for($i = 0; $i < $batches; $i++){

                for($j = 0; $j < $num_in_batch; $j++){
                  
                  $item_id = $data['lead_ids'][$lead_id_index];

                  $item = ModuleItem::find($item_id);
                  
                  $custom_fields = ModuleCustomFields::where([ 'module_id' => $item['module_id'] ])
                                                      ->where(['name' => 'assignee'])
                                                      ->first();

                  ModuleItemMeta::where(['custom_field_id' => $custom_fields['id']])
                                ->where(['item_id' => $item_id])
                                ->update([
                                  'custom_field_value' => $data['user_assigned'][$i]
                                ]);

                  $lead_id_index++;
                }

              }
    
            }else{
              
              $num_leads = $num_leads - $assignee_modulus;

              $num_in_batch = $num_leads / $num_user_assigned;
    
              $batches = $num_leads / $num_in_batch;
    
              $lead_id_index = 0;

              for($i = 0; $i < $batches; $i++){

                for($j = 0; $j < $num_in_batch; $j++){
                  
                  $item_id = $data['lead_ids'][$lead_id_index];

                  $item = ModuleItem::find($item_id);
                  
                  $custom_fields = ModuleCustomFields::where([ 'module_id' => $item['module_id'] ])
                                                      ->where(['name' => 'assignee'])
                                                      ->first();

                  ModuleItemMeta::where(['custom_field_id' => $custom_fields['id']])
                                ->where(['item_id' => $item_id])
                                ->update([
                                  'custom_field_value' => $data['user_assigned'][$i]
                                ]);

                  $lead_id_index++;
                }
              }

              for($k = 0; $k < $assignee_modulus; $k++ ){
                  
                $item_id = $data['lead_ids'][$lead_id_index];

                $item = ModuleItem::find($item_id);
                
                $custom_fields = ModuleCustomFields::where([ 'module_id' => $item['module_id'] ])
                                                    ->where(['name' => 'assignee'])
                                                    ->first();

                \Log::info($item_id);

                ModuleItemMeta::where(['custom_field_id' => $custom_fields['id']])
                              ->where(['item_id' => $item_id])
                              ->update([
                                'custom_field_value' => $data['user_assigned'][$i-1]
                              ]);

                $lead_id_index++;
              }
            }
    
          }

          if($num_lead_owner > 0){

            $owner_modulus = $num_leads % $num_lead_owner;
            
            if($owner_modulus == 0){
    
              $num_in_batch = $num_leads / $num_lead_owner;
    
              $batches = $num_leads / $num_in_batch;
    
              $lead_id_index = 0;

              for($i = 0; $i < $batches; $i++){

                for($j = 0; $j < $num_in_batch; $j++){
                  
                  $item_id = $data['lead_ids'][$lead_id_index];

                  $item = ModuleItem::find($item_id);
                  
                  $custom_fields = ModuleCustomFields::where([ 'module_id' => $item['module_id'] ])
                                                      ->where(['name' => 'assignee'])
                                                      ->first();

                  \Log::info($item_id);

                  ModuleItemMeta::where(['custom_field_id' => $custom_fields['id']])
                                ->where(['item_id' => $item_id])
                                ->update([
                                  'custom_field_value' => $data['lead_owner'][$i]
                                ]);

                  $lead_id_index++;
                }

              }
    
            }else{
              
              $num_leads = $num_leads - $owner_modulus;

              $num_in_batch = $num_leads / $num_user_assigned;
    
              $batches = $num_leads / $num_in_batch;
    
              $lead_id_index = 0;

              for($i = 0; $i < $batches; $i++){

                for($j = 0; $j < $num_in_batch; $j++){
                  
                  $item_id = $data['lead_ids'][$lead_id_index];

                  $item = ModuleItem::find($item_id);
                  
                  $custom_fields = ModuleCustomFields::where([ 'module_id' => $item['module_id'] ])
                                                      ->where(['name' => 'owner'])
                                                      ->first();

                  ModuleItemMeta::where(['custom_field_id' => $custom_fields['id']])
                                ->where(['item_id' => $item_id])
                                ->update([
                                  'custom_field_value' => $data['lead_owner'][$i]
                                ]);

                  $lead_id_index++;
                }
              }

              for($k = 0; $k < $owner_modulus; $k++ ){
                  
                $item_id = $data['lead_ids'][$lead_id_index];

                $item = ModuleItem::find($item_id);
                
                $custom_fields = ModuleCustomFields::where([ 'module_id' => $item['module_id'] ])
                                                    ->where(['name' => 'owner'])
                                                    ->first();

                \Log::info($item_id);

                ModuleItemMeta::where(['custom_field_id' => $custom_fields['id']])
                              ->where(['item_id' => $item_id])
                              ->update([
                                'custom_field_value' => $data['lead_owner'][$i-1]
                              ]);

                $lead_id_index++;
              }
            }
          }
          DB::commit();

          return array('success' => true, 'message' => 'Leads successfully assigned');

      }catch(\QueryException $e){
          DB::rollback();
          return array('success' =>false, 'message' => $e->getMessage());
      }
  }


  public function getAssigned($module = null){

    $preferences = SystemSettings::where(['user_id' => Auth::user()->id])
                                  ->where(['setting' => 'max_table_rows'])
                                  ->select('value')
                                  ->first();

    $custom_fields = ModuleCustomFields::where(['name' => 'assignee'])->orWhere(['name' => 'owner'])->select('id')->get();

    $custom_field_ids = [];

    foreach ($custom_fields as $key => $id) {
      array_push($custom_field_ids, $id->id);
    }

    if(Auth::user()->role_id == 1){
      $item_data = ModuleItemMeta::whereIn('custom_field_id', $custom_field_ids)
                          ->get();
    }else{
      $item_data = ModuleItemMeta::distinct('item_id')->whereIn('custom_field_id', $custom_field_ids)
                          ->where(['custom_field_value' => Auth::user()->id])
                          ->select('item_id')
                          ->get();
    }

    $item_ids = [];

    foreach ($item_data as $key => $item_id) {
      array_push($item_ids, $item_id->item_id);
    }
    
    $module = Module::with('module_fields')->where(['tag' => $module])->select('id')->first();

    $module_items = ModuleItem::with('item_meta')->where(['module_id' => $module->id])->whereIn('id', $item_ids)->get()->take($preferences['value']);

    $items = $this->compactModuleItems($module_items);

    return $items;
  }

  public function getFields($module = null){

    $module = Module::where([ 'tag' => $module ])->select('id')->first();
        
    $custom_fields = ModuleCustomFields::where(['module_id' => $module['id']])->get();

    $active_users = User::orderBy('name', "ASC")->get();

    $sources = LeadSource::orderBy('name', "ASC")->get();

    $products = Product::orderBy('name', "ASC")->get();

    return [
      'fields' => $custom_fields,
      'sources' => $sources,
      'products' => $products,
      'active_users' => $active_users,
    ];
  }



  public function getContactsOrLeads($module = null){
    
    $preferences = SystemSettings::where(['user_id' => Auth::user()->id])
                                  ->where(['setting' => 'max_table_rows'])
                                  ->select('value')
                                  ->first();   
    
    $module = Module::where(['tag' => $module])->select('id')->first();

    

    if(Auth::user()->role_id == 1){

      if($preferences){

        $module_items = ModuleItem::with('item_meta')
        ->where(['module_id' => $module->id])
        ->take($preferences['value'])
        ->get();

      }else{

        $module_items = ModuleItem::with('item_meta')
        ->where(['module_id' => $module->id])
        ->get();

      }

    }else if(Auth::user()->role_id == 2){

      if($preferences){
        $module_items = ModuleItem::with('item_meta')
                                    ->where(['module_id' => $module->id])
                                    ->where(['owner' => Auth::user()->id])
                                    ->orWhere(['assignee' => Auth::user()->id])
                                    ->take($preferences['value'])
                                    ->get();

      }else{
        $module_items = ModuleItem::with('item_meta')
                                    ->where(['module_id' => $module->id])
                                    ->where(['owner' => Auth::user()->id])
                                    ->orWhere(['assignee' => Auth::user()->id])
                                    ->get();
      }

    }else if(Auth::user()->role_id > 2){

      if($preferences){
        $module_items = ModuleItem::with('item_meta')
                                    ->where(['module_id' => $module->id])
                                    ->where(['assignee' => Auth::user()->id])
                                    ->take($preferences['value'])
                                    ->get();

      }else{
        $module_items = ModuleItem::with('item_meta')
                                    ->where(['module_id' => $module->id])
                                    ->where(['assignee' => Auth::user()->id])
                                    ->get();
      }

    }

    $items = $this->compactModuleItems($module_items);

    return $items;

  }
}
