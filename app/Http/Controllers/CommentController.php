<?php

namespace App\Http\Controllers;

use DB;
use App\Task;
use App\Lead;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
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
     * Create a comment for tasks and leads
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function store(Request $request)
    {   
    	$request_user = ['user_id' => $request->session_user_id, 'name' => $request->session_user_name];

        $this->validate($request, [
            'id' => 'required',
            'session_user_id' => 'required',
            'session_user_name' => 'required',
            'type' => 'required'
        ]);

        $source = $request->type == "task" ? Task::find($request->id) : Lead::find($request->id);

        $source_type = $request->type == "task" ? 'App\Task' : 'App\Lead'; 

        try{
            DB::beginTransaction();
            $comment = Comment::create([
                'description' => $request->description,
                'comment_type' => $request->comment_type,
                'source_type' => $source_type , 
                'source_id' => $request->id , 
                'user_id' => $request_user['user_id'],
                'user_name' => $request_user['name'] 
            ]);
            DB::commit();
            return array('success' => true, 'message' =>  'Comment has been added');

        }catch(\QueryException $e){
            DB::rollback();
            return array('success' =>false, 'message' => $e->getMessage());
        }

    }

    public function getStatsTypeById($type = 'lead', $id = null){

        $source_type = ( $type == "task" ) ? 'App\Task' : 'App\Lead'; 

        $total_comments = Comment::where(['source_type' => $source_type])->where(['source_id' => $id])->count();

        $comments = Comment::where(['source_type' => $source_type])
                                ->where(['source_id' => $id])
                                ->orderBy('created_at', 'DESC')->get();

        $comments_count_type = DB::table('comments')
                                 ->where(['source_id' => $id])
                                 ->select('comment_type', DB::raw('count(comment_type) as total'))
                                 ->groupBy('comment_type')
                                 ->get();

        $data = [];
        $comments_graph = [];
        foreach ($comments_count_type as $key => $value) {

            $data['type'] = $value->comment_type;

            if($total_comments > 0){

                $data['percentage'] = round( ( $value->total / $total_comments ) * 100 );
            }else{

                $data['percentage'] = 0;
            }
            
            array_push($comments_graph, $data);
        }

        return array(
            'success' => true, 
            'total_comments' => $total_comments, 
            'comments' => $comments, 
            'comments_graph' => $comments_graph
        );
    }
}
