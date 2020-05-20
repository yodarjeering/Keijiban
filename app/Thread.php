<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Thread extends Model
{
    public $timestamps = false;

    public function getData()
    {
        return $this->name . '\n' . $this->time;
    }
}
