<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchLine extends Model
{
    /*
    public function parent()
    {
        return $this->belongsTo(ResearchLine::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ResearchLine::class, 'parent_id');
    }

    public function descendants()
    {
        return $this->hasMany(ResearchLine::class, 'parent_id')->with('descendants');
    }
    */

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function publications()
    {
        return $this->belongsToMany(Publication::class);
    }
}
