<?php

namespace App\Http\Controllers;

use DB;
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
        $this->middleware('auth:api');
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
        $status = $data['status'];
        $user_assigned_id = $data['user_assigned_id'];
        $user_created_id = $data['user_created_id'];
        $client_id = $data['client_id'];
        $deadline = $data['deadline'];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        try{
            DB::beginTransaction();

            $task = Task::create([
                'title' => $title,
                'description' => $description,
                'status' => $status,
                'user_assigned_id' => $user_assigned_id,
                'user_created_id' => $user_created_id,
                'client_id' => $client_id,
                'deadline' => Carbon::createFromFormat('d/m/Y', $deadline)->format('Y-m-d')
            ]);

            event(new \App\Events\TaskAction($task, $request_user,'created'));

            DB::commit();
            return array('success' => true, 'task' => $task);

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
        $user_assigned_id = $data['user_assigned_id'];
        $user_created_id = $data['user_created_id'];
        $client_id = $data['client_id'];
        $deadline = $data['deadline'];

        try{
            DB::beginTransaction();

            $task = Task::where(['id' => $id])->update([
                'title' => $title,
                'description' => $description,
                'status' => $status,
                'user_assigned_id' => $user_assigned_id,
                'user_created_id' => $user_created_id,
                'client_id' => $client_id,
                'deadline' => Carbon::createFromFormat('d/m/Y', $deadline)->format('Y-m-d')
            ]);

            $task = Task::where(['id' => $id])->get();

            event(new \App\Events\TaskAction($task, $request_user,'updated'));

            DB::commit();
            return array('success' => true, 'task' => Task::find($id));

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

        /**
     * Sees if the Settings from backend allows all to complete taks
     * or only assigned user. if only assigned user:
     * @param $id
     * @param Request $request
     * @return
     * @internal param $ [Auth]  $id Checks Logged in users id
     * @internal param $ [Model] $task->user_assigned_id Checks the id of the user assigned to the task
     * If Auth and user_id allow complete else redirect back if all allowed excute
     * else stmt
     */
    public function updateStatus($id, Request $request)
    {
        $request_user = ['user_id' => $request->session_user_id, 'name' => $request->session_user_name];

        Task::where(['id' => $id])->update([
            'status' => 1
        ]);

        $task = Task::where(['id' => $id ])->first();

        event(new \App\Events\TaskAction($task, $request_user,'updated_status'));

        return array('success' => true, 'message' => 'Task complete');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function updateAssign($id, Request $request)
    {
        $data = $request->all();
        
        $request_user = ['user_id' => $data['session_user_id'], 'name' => $data['session_user_name']];

        Task::where(['id' => $id ])->update([
            'user_assigned_id' => $data['user_assigned_id']
        ]);

        $task = Task::where(['id' => $id ])->first();
        
        event(new \App\Events\TaskAction($task, $request_user,'updated_assign'));

        return array('success' => true, 'message' => 'New user assigned.');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function updateTime($id, Request $request)
    {
        $request_user = ['user_id' => $request->session_user_id, 'name' => $request->session_user_name];

        $task = Task::findOrFail($id);

        $invoice = $task->invoice;

        if(!$invoice) {
            $invoice = Invoice::create([
                'status' => 'draft',
                'client_id' => $task->client->id
            ]);
            $task->invoice_id = $invoice->id;
            $task->save();
        } 

        InvoiceLine::create([
            'title' => $request->title,
            'comment' => $request->comment,
            'quantity' => $request->quantity,
            'type' => $request->type,
            'price' => $request->price,
            'invoice_id' => $invoice->id
        ]);

        event(new \App\Events\TaskAction($task, $request_user,'updated_time'));

        return array('success' => true, 'message' =>  'Time has been updated');
    }
}
