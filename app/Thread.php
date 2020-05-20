<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected  $guarded = array('id');
    public function getData()
    {
        return $this->name . '\n' . $this->time;
    }
}
