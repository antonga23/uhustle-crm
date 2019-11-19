<?php

namespace App\Http\Controllers;


use DB;
use Auth;
use Session;
use Storage;
use App\User;
use App\Task;
use App\Role;
use App\Activity;
use App\Invoice;
use App\InvoiceLine;
use App\Lead;
use App\Client;
use App\Comment;
use App\LeadsCallbacks;
use App\Product;
use App\Twillio;
use App\UserClients;
use App\UserLeads;
use App\SystemSettings;
use App\WinstaUploads;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
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

        $users = User::with('call_backs')->with('comments')->orderBy('created_at', 'DESC')->get();

        return array('success' => true,'count' => $users->count(), 'users' => $users);
    }


    
    public function getUsers($role = null){

        $users_col = User::with('role')->orderBy('updated_at', 'DESC')->get();

        $all_users = $this->getUserDataFromColection($users_col);

        $manager = User::with('role')->where(['role_id' => 1])->count();    

        $account_manager = User::where(['role_id' => 2])->count();

        $team_leader = User::where(['role_id' => 3])->count();

        $agent = User::where(['role_id' => 4])->count();

        $roles = Role::get();

        if(is_null($role)):
            
            $selected_users = $all_users;

        else:

            $users_col = User::with('role')->where(['role_id' => $role])->orderBy('updated_at', 'DESC')->get();
            
            $selected_users = $this->getUserDataFromColection($users_col);

        endif;            
        
        return array(
            'success' => true,
            'selected_users' => $selected_users, 
            'count_all' => User::count(), 
            'manager' => $manager, 
            'account_manager' => $account_manager, 
            'team_leader' => $team_leader, 
            'agent' => $agent, 
            'roles' => $roles, 
        );
    }

    public function getUserDataFromColection($collection = null){

        $user_data = [];

        foreach($collection as $key => $user){

            $data = new \StdClass();

            $data->id = $user->id;
            $data->full_name = $user->name . ' ' . $user->lastname;
            $data->name = $user->name;
            $data->lastname = $user->lastname;
            $data->nickname = $user->nickname;
            $data->email = $user->email;
            $data->role = $user->role->display_name;
            $data->role_id = $user->role->id;
            $data->personal_number = $user->personal_number;
            $data->work_number = $user->work_number;
            $data->address = $user->address;
            $data->updated_at = ( null !== $user->updated_at )? $user->updated_at->toDateString() : '';
            $data->avatar = $user->avatar;
            $data->status = ( $user->activated == 1 ) ? 'Active' : 'Disabled';
            $data->activated = $user->activated;
            $data->commission_structure = $user->commission_structure;
            $data->monthly_target = $user->monthly_target;

            array_push($user_data, $data);
        }
        return  $user_data;
    }

    public function uploadWinstaFile(Request $request){
        $id = Auth::user()->id;

        $data = $request->all();

        $winstaEmail = $data['winsta_user_email'];

        $fileName = $data['file'];

        $fileContents = $data['file_content'];

        $client = Lead::where(['email' => $winstaEmail])->first();
        
        $path = '/images/winsta-uploads/' . $client->id;

        $directory = '/images/winsta-uploads/' . $client->id . '/' . $fileName;

        if(!Storage::exists($path)) {
            Storage::makeDirectory($path, 0775, true, true); //creates directory
        }
        
        Storage::put($directory, $fileContents);

        $user = WinstaUploads::create([
                'user_assigned_id' => $client->user_assigned,
                'module_id' => $client->id,
                'file_name' => $fileName,
            ]);

        return array('success' =>true, 'image-name' => $fileName);
    }

    public function uploadAvatar(Request $request){
        $id = Auth::user()->id;
        if($request->hasFile('img')){
            $imageName = time().'.'.request()->img->getClientOriginalExtension();
            
            $directory = '/images/avatars/' . $id ;

            Storage::deleteDirectory($directory);

            $path = request()->img->storeAs($directory, $imageName,'public_uploads');

            $user = User::where('id', '=', $id)->update(['avatar' => $imageName]);

            return array('success' =>true, 'image-name' => $imageName);
        }else{
            return array('error' => 'Please select image to upload');
        }
    }

    public function deleteFile($id = null){

        $file_info = WinstaUploads::find($id);

        $directory = '/images/winsta-uploads/' . $file_info->module_id . '/' . $file_info->file_name;

        Storage::delete($directory);

        WinstaUploads::find($id)->delete();

        return array('success' =>true, 'message' => 'File deleted successfully');
    }

    public function downloadFile($id = null){

        $file_info = WinstaUploads::find($id);

        $directory = '/images/winsta-uploads/' . $file_info->module_id . '/' . $file_info->file_name;

        $filename = $file_info->file_name;

        $headers = ['Content-Type: application/zip','Content-Disposition: attachment; filename={$filename}'];

        return Storage::download($directory,$filename,$headers);

    }

    public function getCurrentUser(){
        return ['user' => Auth::user()];
    }

    public function store(Request $request){
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $data = $request->all();
        $id = $request_user['user_id'];
        $name = $data['name'];
        $lastname = $data['lastname'];
        $nickname = (isset($data['nickname']))? $data['nickname'] : NULL;
        $email = $data['email'];
        $work_number = $data['work_number'];
        $personal_number = $data['personal_number'];
        $address = $data['address'];
        $role_id = $data['role_id'];
        $notifications = 1;
        $commission_structure = $data['commission_structure'];
        $monthly_target = $data['monthly_target'];
        $password_confirmation = $data['password_confirmation'];

        $validator = \Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users,email',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }else{ 

            try{
                DB::beginTransaction();

                $user = User::create([
                    'role_id' => $role_id,
                    'name' => $name,
                    'lastname' => $lastname,
                    'nickname' => $nickname,
                    'email' => $email,
                    'work_number' => $work_number,
                    'personal_number' => $personal_number,
                    'address' => $address,
                    'notifications' => $notifications,
                    'password' => bcrypt($password_confirmation),
                    'activated' => 1,
                    'commission_structure' => $commission_structure,
                    'monthly_target' => $monthly_target,
                    'email_verified_at' => date('Y-m-d H:i:s')
                ]);

                DB::commit();
                return array('success' => true,'message' => 'User added successfully', 'user' => $user);

            }catch(\QueryException $e){
                DB::rollback();
                return array('success' =>false, 'message' => $e->getMessage());
            }
        }
    }

    public function update(Request $request){
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $data = $request->all();
        $id = $data['id'];
        $name = $data['name'];
        $role_id = $data['role_id'];
        $lastname = $data['lastname'];
        $nickname = (isset($data['nickname']))? $data['nickname'] : NULL;
        $email = $data['email'];
        $work_number = $data['work_number'];
        $personal_number = $data['personal_number'];
        $address = $data['address'];
        $notifications = (isset($data['notifications'])) ? $data['notifications'] : 1;
        $activated = $data['activated'];
        $commission_structure = $data['commission_structure'];
        $monthly_target = $data['monthly_target'];
        $password_confirmation = isset($data['password_confirmation']) ? $data['password_confirmation'] : null ;

        $validator = \Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users,email,'. $id,
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }else{ 

            try{
                DB::beginTransaction();
                if(is_null($password_confirmation)){ 
                  $user = User::where(['id' => $id])->update([
                      'role_id' => $role_id,
                      'name' => $name,
                      'lastname' => $lastname,
                      'nickname' => $nickname,
                      'email' => $email,
                      'work_number' => $work_number,
                      'personal_number' => $personal_number,
                      'address' => $address,
                      'notifications' => $notifications,
                      'commission_structure' => $commission_structure,
                      'monthly_target' => $monthly_target,
                      'activated' => $activated
                  ]);
                }else{
                  $user = User::where(['id' => $id])->update([
                      'role_id' => $role_id,
                      'name' => $name,
                      'lastname' => $lastname,
                      'nickname' => $nickname,
                      'email' => $email,
                      'work_number' => $work_number,
                      'personal_number' => $personal_number,
                      'address' => $address,
                      'notifications' => $notifications,
                      'activated' => $activated,
                      'commission_structure' => $commission_structure,
                      'monthly_target' => $monthly_target,
                      'password' => bcrypt($password_confirmation),
                  ]);
                }
                $user = User::with('role')->find($id);

                DB::commit();
                return array('success' => true,'message' => 'Profile updated successfully', 'user' => $user);

            }catch(\QueryException $e){
                DB::rollback();
                return array('success' =>false, 'message' => $e->getMessage());
            }
        }
    }

    public function updateAccount(Request $request){
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $data = $request->all();
        $id = $request_user['user_id'];
        $old_password = $data['old_password'];
        $password = $data['password'];
        $password_confirmation = $data['password_confirmation'];
        $notifications = $data['notifications'];

        $validator = \Validator::make($data, [
            'old_password' => 'current_password',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
         ]);

         if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }else{ 
            try{
                DB::beginTransaction();

                $user = User::where(['id' => $id])->update([
                    'password' => bcrypt($password_confirmation),
                    'notifications' => $notifications
                ]);

                $user = User::find($id);

                DB::commit();
                return array('success' => true,'message' => 'Password updated successfully', 'user' => $user);

            }catch(\QueryException $e){
                DB::rollback();
                return array('success' =>false, 'message' => $e->getMessage());
            }
        }
    }

    public function getAssigned(Request $request){
        $id = $request->user_id;

        $user = User::where(['id' => $id])->get();

        return array('success' =>true, 'user' => $this->getUserDataFromColection());        

    }

    public function destroy($id = null){
        User::where(['id' => $id])->delete();
        return array('success' =>true,'message' => 'Item deleted successfully');
    }

    public function getPreferences(){
        $user_id = Auth::user()->id;

        $preferences = SystemSettings::where(['user_id' => $user_id])->get();

        return array('success' =>true,'preferences' => $preferences);
    }

    public function updatePreferences(Request $request){
        $user_id = Auth::user()->id;

        $data = $request->all();
        $system_settings = $request['system_settings'];
        $user_settings = $request['user_settings'];

        try{
            DB::beginTransaction();

            $check = SystemSettings::where(['user_id' => $user_id])->where(['setting' => 'language'])->count();
            if($check > 0){
                $prev_value = SystemSettings::where(['user_id' => $user_id])->where(['setting' => 'language'])->first();
                
                SystemSettings::where(['user_id' => $user_id])->where(['setting' => 'language'])->update([
                    'value' => $user_settings['language'],
                    'previous_value' => $prev_value->value,
                    'modified_by' => $user_id,
                ]);
            }else{
                SystemSettings::create([
                    'user_id' => $user_id,
                    'setting' => 'language',
                    'value' => $user_settings['language'],
                    'modified_by' => $user_id,
                ]);
            }

            $check = SystemSettings::where(['user_id' => $user_id])->where(['setting' => 'theme'])->count();
            if($check > 0){
                $prev_value = SystemSettings::where(['user_id' => $user_id])->where(['setting' => 'theme'])->first();
                
                SystemSettings::where(['user_id' => $user_id])->where(['setting' => 'theme'])->update([
                    'value' => $user_settings['theme'],
                    'previous_value' => $prev_value->value,
                    'modified_by' => $user_id,
                ]);
            }else{
                SystemSettings::create([
                    'user_id' => $user_id,
                    'setting' => 'theme',
                    'value' => $user_settings['theme'],
                    'modified_by' => $user_id,
                ]);
            }

            $check = SystemSettings::where(['user_id' => $user_id])->where(['setting' => 'max_table_rows'])->count();
            if($check > 0){
                $prev_value = SystemSettings::where(['user_id' => $user_id])->where(['setting' => 'max_table_rows'])->first();
                
                SystemSettings::where(['user_id' => $user_id])->where(['setting' => 'max_table_rows'])->update([
                    'value' => $user_settings['max_table_rows'],
                    'previous_value' => $prev_value->value,
                    'modified_by' => $user_id,
                ]);
            }else{
                SystemSettings::create([
                    'user_id' => $user_id,
                    'setting' => 'max_table_rows',
                    'value' => $user_settings['max_table_rows'],
                    'modified_by' => $user_id,
                ]);
            }
            DB::commit();
            return array('success' => true,'message' => 'Preferences updated successfully');
        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }

    }
}
