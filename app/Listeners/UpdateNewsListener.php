<?php

namespace App\Listeners;

use App\Events\UpdateNewsEvent;
use App\Models\JdmUpdateNews;

class UpdateNewsListener
{

    public function handle(UpdateNewsEvent $event)
    {
        $saveHistory = JdmUpdateNews::create(['news_id'=>$event->id, 'title'=>$event->name, 'user_id' => $event->user_id, 'updated_at' => now()]);
        return $saveHistory;
    }
}
