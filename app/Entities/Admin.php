<?php

namespace App\Entities;

use App\Interface\PostingNews;
use App\Interface\DeleteNews;
use App\Interface\UpdateNews;
use App\Repositories\NewsRepositories;

class Admin implements PostingNews, UpdateNews, DeleteNews {
    public function post($news)
    {
        $repo = new NewsRepositories();
        $res = $repo->create($news);
        return $res;
    }

    public function update($newsId, $content)
    {
        $repo = new NewsRepositories();
        $res = $repo->update($newsId,$content);
        return $res;
    }   

    public function delete($newsId){
        $repo = new NewsRepositories();
        $res = $repo->delete($newsId);
        return $res;
    }
    
}

?>