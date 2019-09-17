<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Module;
use App\ModuleCustomFields;
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
         return array('success' => true, 'modules' => $modules);
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
                ModuleCustomFields::create([
                    'module_id' => $module->id,
                    'name' => $value['name'],
                    'type' => $value['type']
                ]);
            }

            DB::commit();
            return array('success' => true, 'message' => 'Module successfully created', 'module' => Module::with('module_fields')->find($module->id) );

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
                
                ModuleCustomFields::create([
                    'module_id' => $id,
                    'name' => $value['name'],
                    'type' => $value['type']
                ]);
            }

            DB::commit();
            return array('success' => true, 'message' => 'Module successfully updated', 'module' => Module::with('module_fields')->find($id) );

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
    }
}
