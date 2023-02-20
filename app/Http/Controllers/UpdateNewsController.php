<?php

namespace App\Http\Controllers;

use App\Activity\NewsActivity;
use App\Http\Resources\NewsResource;
use App\Models\JdmManagementNews;
use App\Request\StoreNews;

class UpdateNewsController extends Controller
{
    public function update(JdmManagementNews $jdmManagementNews, StoreNews $storeNews)
    {
        $activity = new NewsActivity();
        $res = $activity->update($jdmManagementNews, $storeNews);
        return new NewsResource($res);
    }   
}
