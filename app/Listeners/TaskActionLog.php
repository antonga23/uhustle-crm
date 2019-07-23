<?php

namespace App\Listeners;

use App\Activity;
use App\Events\TaskAction;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TaskActionLog
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TaskAction  $event
     * @return void
     */
    public function handle(TaskAction $event)
    {
        $request_user = $event->getRequestUser();
        switch ($event->getAction()) {
            case 'created':
                $text = __(':title was created by :creator and assigned to :assignee', [
                        'title' => $event->getTask()->title,
                        'creator' => $request_user['name'],
                        'assignee' => $event->getTask()->user->name
                    ]);
                break;
            case 'updated':
                $text = __('Task was updated by :username', [
                        'username' => $request_user['name'],
                    ]);
                break;
            case 'updated_status':
                $text = __('Task was completed by :username', [
                        'username' => $request_user['name'],
                    ]);
                break;
            case 'updated_time':
                $text = __(':username inserted a new time for this task', [
                        'username' => $request_user['name'],
                    ]);
                ;
                break;
            case 'updated_assign':
                $text = __(':username assigned task to :assignee', [
                        'username' => $request_user['name'],
                        'assignee' => $event->getTask()->user->name
                    ]);
                break;
            default:
                break;
        }

        $activityinput = array_merge(
            [
                'text' => $text,
                'user_id' => $request_user['user_id'],
                'source_type' =>  'App\Task',
                'source_id' =>  $event->getTask()->id,
                'action' => $event->getAction()
            ]
        );
        
        Activity::create($activityinput);
    }
}
