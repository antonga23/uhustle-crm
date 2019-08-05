<?php

namespace App\Http\Controllers;


use DB;
use Auth;
use Session;
use Storage;
use App\User;
use App\Task;
use App\Activity;
use App\Invoice;
use App\InvoiceLine;
use App\Lead;
use App\Comment;
use App\LeadsCallbacks;
use App\Product;
use App\Twillio;
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

    public function uploadAvatar(Request $request){
        $id = Auth::user()->id;
        if($request->hasFile('img')){
            $imageName = time().'.'.request()->img->getClientOriginalExtension();
            
            $directory = 'public/images/avatars/' . $id ;

            Storage::deleteDirectory($directory);

            $path = Storage::putFileAs($directory, $request->file('img'), $imageName);

            $user = User::where('id', '=', $id)->update(['avatar' => $imageName]);

            return array('success' =>true, 'image-name' => $imageName);
        }else{
            return array('error' => 'Please select image to upload');
        }
    }

    public function getCurrentUser(){
        return ['user' => Auth::user()];
    }

    public function update(Request $request){
        $request_user = ['user_id' => Auth::user()->id, 'name' => Auth::user()->name . ' ' . Auth::user()->lastname];

        $data = $request->all();
		$id = $request_user['user_id'];
        $name = $data['name'];
		$lastname = $data['lastname'];
		$nickname = $data['nickname'];
		$email = $data['email'];
		$work_number = $data['work_number'];
		$personal_number = $data['personal_number'];
		$address = $data['address'];
		$notifications = $data['notifications'];

        $validator = \Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:users,email,'. $id,
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }else{ 

            try{
                DB::beginTransaction();

                $user = User::where(['id' => $id])->update([
                    'name' => $name,
                    'lastname' => $lastname,
                    'nickname' => $nickname,
                    'email' => $email,
                    'work_number' => $work_number,
                    'personal_number' => $personal_number,
                    'address' => $address,
                    'notifications' => $notifications
                ]);

                $user = User::find($id);

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

}
