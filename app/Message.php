<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function getData()
    {
        return $this->content . '\n' . $this->time ;
    }
}
