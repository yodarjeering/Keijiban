<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected  $guarded = array('id');
    public function getData()
    {
        return $this->content  .' '. $this->time ;
    }
}
