<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchLine extends Model
{
    public function parent()
    {
        return $this->belongsTo(ResearchLine::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ResearchLine::class, 'parent_id');
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
