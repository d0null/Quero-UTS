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

    public function researchLine()
    {
        return $this->belongsTo(ResearchLine::class);
    }
}
