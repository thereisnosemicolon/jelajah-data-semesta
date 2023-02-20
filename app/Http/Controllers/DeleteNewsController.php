<?php

namespace App\Http\Controllers;

use App\Activity\NewsActivity;
use App\Http\Resources\NewsResource;
use App\Models\JdmManagementNews;
use Illuminate\Http\Request;

class DeleteNewsController extends Controller
{
    public function delete(JdmManagementNews $jdmManagementNews)
    {
        $activity = new NewsActivity();
        $res = $activity->delete($jdmManagementNews);
        return new NewsResource($res);
    }
}
