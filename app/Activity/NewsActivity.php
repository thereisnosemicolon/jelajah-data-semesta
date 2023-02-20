<?php

namespace App\Activity;

use App\Entities\Admin;
use App\Events\CreateNewsEvent;
use App\Events\DeleteNewsEvent;
use App\Events\UpdateNewsEvent;
use App\Models\JdmManagementNews;

class NewsActivity
{
    public function posting($news)
    {   
        $entities = new Admin();
        $activity = $entities->post($news);
        $event = event(new CreateNewsEvent($activity));
        return $event;
    }

    public function update(JdmManagementNews $jdmManagementNews, $content){
        $entities = new Admin();
        $activity = $entities->update($jdmManagementNews, $content);
        $event = event(new UpdateNewsEvent($activity));
        return $event;
    }

    public function delete(JdmManagementNews $jdmManagementNews){
        $event = event(new DeleteNewsEvent($jdmManagementNews));
        $entities = New Admin();
        $entities->delete($jdmManagementNews);
        return $event;
    }
}

?>