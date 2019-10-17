<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Role;
use App\Module;
use App\ModuleCustomFields;
use App\ModuleItem;
use App\ModuleItemMeta;
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

            $existing = ModuleCustomFields::where(['module_id' => $id])->delete();

            foreach($module_fields as $key => $value){
                
                $can_read = ( !isset($value['can_read']) || is_null($value['can_read']) )? null : implode(',',$value['can_read']) ;
                $can_edit = ( !isset($value['can_edit']) || is_null($value['can_edit']) )? null : implode(',',$value['can_edit']) ;
                $required = ( !isset($value['required']) || is_null($value['required']) )? null : $value['required'] ;
                
                ModuleCustomFields::create([
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
}
