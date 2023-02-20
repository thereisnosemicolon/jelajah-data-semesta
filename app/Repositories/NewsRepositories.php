<?php

namespace App\Repositories;

use App\Models\JdmCommentNews;
use App\Models\JdmManagementNews;

class NewsRepositories
{
    public function create($newsdata){
        $data['name'] = $newsdata->name;
        $data['image'] = $newsdata->image;
        $data['user_id'] = auth()->user()->id;
        $news = JdmManagementNews::create($data);
        return $news;
    }

    public function update(JdmManagementNews $jdmManagementNews, $newsdata){
        $data['name'] = $newsdata->name;
        $data['user_id'] = auth()->user()->id;
        $data['updated_at'] = now();
        $jdmManagementNews->update($data);
        return $jdmManagementNews;
    }

    public function delete(JdmManagementNews $jdmManagementNews)
    {
        $jdmManagementNews->delete();
        return $jdmManagementNews;
    }

}

?>