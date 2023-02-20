<?php

namespace App\Activity;

use App\Entities\User;
use App\Models\JdmManagementNews;

class CommentActivity
{
    public function commenting($request)
    {
        $user = new User();
        return $user->store($request);
    }

}

?>