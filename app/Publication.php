<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Publication extends Model
{
    use HasTags;

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
    
    public function school()
    {
        return $this->belongsTo(School::class);
    }
    

    public function researchLines()
    {
        return $this->belongsToMany(ResearchLine::class);
    }
}
