<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Task;
use App\Activity;
use App\Invoice;
use App\InvoiceLine;
use Carbon\Carbon;
use App\Comment;
use Illuminate\Http\Request;

class TaskController extends Controller
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
         $tasks = Task::get();
         return array('success' => true, 'tasks' => $tasks);
    }

    public function getActive()
    {
         $tasks = Task::where(['status' => 0])->get();
         return array('success' => true, 'tasks' => $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request_user = ['user_id' => $request->session_user_id, 'name' => $request->session_user_name];

        $data = $request->all();
        
        $title = $data['title'];
        $description = $data['description'];
        $status = 0;
        $user_created_id = Auth::user()->id;
        $deadline = $data['date'];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        try{
            DB::beginTransaction();

            $task = Task::create([
                'title' => $title,
                'description' => $description,
                'status' => $status,
                'user_created_id' => $user_created_id,
                'deadline' => $deadline
            ]);

            DB::commit();

            return array('success' => true, 'message' => 'Reminder added successfully');

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request_user = ['user_id' => $request->session_user_id, 'name' => $request->session_user_name];

        $data = $request->all();
        $id = $data['id'];
        $title = $data['title'];
        $description = $data['description'];
        $status = $data['status'];
        $user_created_id = Auth::user()->id;
        $deadline = $data['date'];
        
        try{
            DB::beginTransaction();

            $task = Task::where(['id' => $id])->update([
                'title' => $title,
                'description' => $description,
                'status' => $status,
                'deadline' => date('Y-m-d',strtotime($deadline))
            ]);

            DB::commit();

            return array('success' => true, 'message' => 'Reminder updated successfully');

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $client = Task::where(['id' => $id])->delete();
         return array('success' => true, 'client' => $client);
    }

    public function getById($id){
         $task = Task::findOrFail($id);

         $task_info = [
            'assignee' => $task->getAssignee(),
            'creator' => $task->getCreator(),
            'days_till_deadline' => $task->getDaysUntilDeadlineAttribute(),
         ];

         $activity_log = Activity::where(['source_id' => $id])->where(['source_type' => 'App\Task'])->select('created_at', 'text')->get();

         $comments = Comment::where(['source_id' => $id])->where(['source_type' => 'App\Task'])->select('comments.user_id', 'comments.created_at', 'comments.description')->get();

         return array('success' => true, 
                    'task' => $task, 
                    'task_info' => $task_info, 
                    'activity_log' => $activity_log,
                    'comments' => $comments
                );
    }

    public function getUserTasks(){

      $tasks = Task::where( ['user_created_id' => Auth::user()->id ])
                      ->where( ['status' => 0 ])
                      ->orderBy('deadline', 'ASC')->get();

      return array('success' => true, 'tasks' => $tasks);

    }
}
