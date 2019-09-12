<?php

namespace App\Http\Controllers;


use DB;
use App\Role;
use App\Permissions;
use Illuminate\Http\Request;

class RoleController extends Controller
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
         $roles = Role::get();
         return array('success' => true, 'roles' => $roles);
    }

    public function getActive()
    {
         $roles = Role::where(['status' => 1])->get();
         return array('success' => true, 'roles' => $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_user = ['user_id' => $request->session_user_id, 'name' => $request->session_user_name];

        $data = $request->all();
        $name = $data['name'];
        $display_name = $data['display_name'];
        $description = $data['description'];
        $status = $data['status'];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        try{
            DB::beginTransaction();

            $role = Role::create([
                'name' => $name,
                'display_name' => $display_name,
                'description' => $description,
                'status' => $status
            ]);

            DB::commit();
            return array('success' => true, 'role' => $role);

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    public function getById($role_id = null)
    {
         $role = Role::findOrFail($role_id);
         return array('success' => true, 
                    'role' => $role
                );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request_user = ['user_id' => $request->session_user_id, 'name' => $request->session_user_name];

        $data = $request->all();
        $id = $data['id'];
        $name = $data['name'];
        $display_name = $data['display_name'];
        $description = $data['description'];
        $status = $data['status'];

        try{
            DB::beginTransaction();

            $role = Role::where(['id' => $id])->update([
                'name' => $name,
                'display_name' => $display_name,
                'description' => $description,
                'status' => $status
            ]);

            DB::commit();
            return array('success' => true, 'role' => $role);

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    public function getPermissions(){
        $permissions = Permissions::get();
        return array('success' => true, 'permissions' => $permissions);
    }

    public function applyPermissions(Request $request){
        $request_user = ['user_id' => $request->session_user_id, 'name' => $request->session_user_name];

        $data = $request->all();

        $permissions = $data['permissions'];
            
        try{
            DB::beginTransaction();

            foreach($permissions as $key => $permission){
                Permissions::find($permission['id'])->update([
                    "module_id" => $permission['module_id'],
                    "role_id" => $permission['role_id'],
                    "read" => $permission['read'],
                    "write" => $permission['write'],
                    "delete" => $permission['delete'],
                    "status" => $permission['status'],
                ]);
            }

            DB::commit();

            $permissions = Permissions::get();

            return array('success' => true, 'permissions' => $permissions);

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

}
