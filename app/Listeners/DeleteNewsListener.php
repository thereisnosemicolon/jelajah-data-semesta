<?php

namespace App\Listeners;

use App\Events\DeleteNewsEvent;
use App\Models\JdmDeleteNews;

class DeleteNewsListener
{
    
    public function handle(DeleteNewsEvent $event)
    {
        $saveHistory = JdmDeleteNews::create(['news_id'=>$event->id, 'title'=>$event->name, 'user_id' => $event->user_id, 'deleted_at' => now()]);
        return $saveHistory;
    }
}
