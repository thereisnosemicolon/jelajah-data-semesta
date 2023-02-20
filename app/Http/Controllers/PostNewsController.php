<?php

namespace App\Http\Controllers;

use App\Activity\NewsActivity;
use App\Http\Resources\NewsResource;
use App\Request\StoreNews;

class PostNewsController extends Controller
{
    public function post(StoreNews $storeNews, NewsActivity $newsActivity){
        $post = $newsActivity->posting($storeNews);
        return new NewsResource($post);
    }
}
