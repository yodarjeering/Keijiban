<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function getData()
    {
        return $this->name . '\n' . $this->time;
    }
}
