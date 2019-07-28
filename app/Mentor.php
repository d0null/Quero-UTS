<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->last_name;
    }
}
