<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JdmManagementNews extends Model
{
    use HasFactory;
    protected $guarded = ['id',];

    public function datacreate()
    {
        return $this->hasMany(JdmCreateNews::class, 'news_id', 'id');
    }

    public function dataupdate(){
        return $this->hasMany(JdmUpdateNews::class, 'news_id', 'id');
    }

    public function datadelete(){
        return $this->hasMany(JdmDeleteNews::class, 'news_id', 'id');
    }

    public function datacomment(){
        return $this->hasMany(JdmCommentNews::class, 'news_id', 'id');
    }

}
