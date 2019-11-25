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
        $data = $request->all();
        
        $title = $data['title'];
        $description = ( isset($data['description']) )? $data['description'] : null;
        $status = ( isset($data['status']) )? $data['status'] : null;
        $user_created_id = Auth::user()->id;
        $deadline = $data['date'];
        $time = $data['time'];

        try{
            DB::beginTransaction();
            if(isset($data['lead_id'])){

              $task = Task::create([
                  'title' => $title,
                  'description' => $description,
                  'status' => $status,
                  'user_created_id' => $user_created_id,
                  'client_id' => $data['lead_id'],
                  'deadline' => $deadline,
                  'time' => $time
              ]);

            }else{
              $task = Task::create([
                  'title' => $title,
                  'description' => $description,
                  'status' => $status,
                  'user_created_id' => $user_created_id,
                  'deadline' => $deadline,
                  'time' => $time
              ]);
            }

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
        $data = $request->all();
        $id = $data['id'];
        $title = $data['title'];
        $status = $data['status'];
        $user_created_id = Auth::user()->id;
        $deadline = $data['date'];
        $time = $data['time'];
        
        try{
            DB::beginTransaction();

            $task = Task::where(['id' => $id])->update([
                'title' => $title,
                'status' => $status,
                'deadline' => date('Y-m-d',strtotime($deadline)),
                'time' => $time,
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

    public function getActivities($client_id = null){

      $tasks = Task::with('creator')->where( ['client_id' => $client_id ])
                      ->whereIn('status', [1,2])
                      ->orderBy('deadline', 'ASC')->get();

      $closed_tasks = Task::with('creator')->where( ['client_id' => $client_id ])
                      ->where(['status' => 0])
                      ->orderBy('deadline', 'ASC')->get();

      return array('success' => true, 'open_activities' => $tasks, 'closed_activities' => $closed_tasks);

    }
}
