<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewsResource;
use App\Models\JdmManagementNews;

class ShowNewsController extends Controller
{
    public function show(JdmManagementNews $jdmManagementNews)
    {  
        return new NewsResource($jdmManagementNews->paginate());
    }
}
