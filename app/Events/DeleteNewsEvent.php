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

class DeleteNewsEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $id;
    public $name;
    public $user_id;

    public function __construct(JdmManagementNews $jdmManagementNews)
    {
        $this->id = $jdmManagementNews->id;
        $this->name = $jdmManagementNews->name;
        $this->user_id = $jdmManagementNews->user_id;
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
