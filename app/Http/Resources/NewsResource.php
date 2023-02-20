<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class NewsResource extends ResourceCollection
{
    public function toArray(Request $request)
    {
        return [
            'news' => $this->collection,
            'comment' => CommentsResource::collection($this->collection)
        ];
    }
}
