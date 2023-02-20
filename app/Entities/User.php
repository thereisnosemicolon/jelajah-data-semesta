<?php

namespace App\Entities;

use App\Interface\CommentNews;
use App\Jobs\CommentProcess;

class User implements CommentNews {
    public function store($request){
        try {
            CommentProcess::dispatch($request)->onConnection('redis')->onQueue('comment_process');
        } catch (\Exception $exception) {
            return $exception;
        }
    }   
}
?>