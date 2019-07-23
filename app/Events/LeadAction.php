<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Lead;

class LeadAction
{
    private $lead;
    private $action;
    public $request_in_user;

    use InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     * LeadAction constructor.
     * @param Lead $lead
     * @param $action
     */
    public function __construct(Lead $lead,  $request_in_user, $action)
    {
        $this->lead = $lead;
        $this->action = $action;
        $this->request_in_user = $request_in_user;
    }

    public function getLead()
    {
        return $this->lead;
    }
    
    public function getAction()
    {
        return $this->action;
    }

    public function getRequestUser()
    {
        return $this->request_in_user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
