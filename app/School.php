<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    
    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
    
}
