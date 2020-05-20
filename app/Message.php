<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $timestamps = false;
    public function getData()
    {
        return $this->content  .' '. $this->time ;
    }

    public function scopeThread_idEqual($query, $str)
    {
        return $query->where('thread_id', $str);
    }
}
