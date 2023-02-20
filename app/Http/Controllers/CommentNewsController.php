<?php

namespace App\Http\Controllers;

use App\Activity\CommentActivity;
use App\Http\Resources\CommentsResource;
use App\Request\StoreFormComment;

class CommentNewsController extends Controller
{
    public function comment(StoreFormComment $storeFormComment, CommentActivity $commentActivity){
        $res = $commentActivity->commenting($storeFormComment);
        return new CommentsResource($res);   
    }
}
