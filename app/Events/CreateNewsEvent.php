<?php

namespace App\Events;

use App\Models\JdmManagementNews;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreateNewsEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $id;
    public $user_id;
    public $name;
    /**
     * Create a new event instance.
     */
    public function __construct(JdmManagementNews $jdmManagementNews)
    {
        $this->id = $jdmManagementNews->id;
        $this->user_id = $jdmManagementNews->user_id;
        $this->name = $jdmManagementNews->name; 
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
