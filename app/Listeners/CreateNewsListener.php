<?php

namespace App\Listeners;

use App\Events\CreateNewsEvent;
use App\Models\JdmCreateNews;

class CreateNewsListener
{
    public function handle(CreateNewsEvent $event)
    {
        $saveHistory = JdmCreateNews::create(['news_id'=>$event->id, 'title'=>$event->name, 'user_id' => $event->user_id, 'created_at' => now()]);
        return $saveHistory;
    }
}
