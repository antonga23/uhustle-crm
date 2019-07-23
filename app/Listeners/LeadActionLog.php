<?php

namespace App\Listeners;

use App\Activity;
use App\Events\LeadAction;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LeadActionLog
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
     * @param  LeadAction  $event
     * @return void
     */
    public function handle(LeadAction $event)
    {
        $request_user = $event->getRequestUser();
        switch ($event->getAction()) {
            case 'created':
                $text = __(':title was created by :creator and assigned to :assignee', [
                        'title' => $event->getLead()->title,
                        'creator' => $request_user['name'],
                        'assignee' => $event->getLead()->user->name
                    ]);
                break;
            case 'updated':
                $text = __('Lead was updated by :username', [
                        'username' => $request_user['name'],
                    ]);
                break;
            case 'updated_status':
                $status = ( $event->getLead()->status == 1)? 'Completed' : 'Re-opened' ;
                $text = __('Lead was :status by :username', [
                        'username' => $request_user['name'],
                        'status' => $status,
                    ]);
                break;
            case 'updated_time':
                $text = __(':username inserted a new time for this task', [
                        'username' => $request_user['name'],
                    ]);
                ;
                break;
            case 'updated_assign':
                $text = __(':username assigned lead to :assignee', [
                        'username' => $request_user['name'],
                        'assignee' => $event->getLead()->user->name
                    ]);
                break;
            case 'updated_callback':
                $text = __(':username updated callback information', [
                        'username' => $request_user['name']
                    ]);
                break;
            case 'created_callback':
                $text = __(':username added a callback entry', [
                        'username' => $request_user['name']
                    ]);
                break;
            default:
                break;
        }

        $activityinput = array_merge(
            [
                'text' => $text,
                'user_id' => $request_user['user_id'],
                'source_type' =>  'App\Lead',
                'source_id' =>  $event->getLead()->id,
                'action' => $event->getAction()
            ]
        );
        
        Activity::create($activityinput);

    }
}
