<?php

namespace App\Jobs;

// use App\Models\JdmManagementNews;

use App\Repositories\CommentRepositories;
use App\Repositories\NewsRepositories;
use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\Middleware\WithoutOverlapping;
// use Illuminate\Queue\SerializesModels;

class CommentProcess implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;
    public $comment;

    public function __construct($request)
    {
        $this->comment = $request->all();
    }

    public function handle()    
    {
        $repo = new CommentRepositories();
        $res = $repo->create($this->comment);
        return $res;
    }
}
