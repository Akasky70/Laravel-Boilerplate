<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BlogResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $date = date('M j, Y', strtotime($this->created_at));
        $time = date('h:ia', strtotime($this->created_at));
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'created_at_date' => $date,
            'created_at_time' => $time
        ];
    }

    public function with($request){

        return[
            'version' => '1.0.0',
            'author_url' => url('http://akashrai.com.np')
        ];
    }
}
