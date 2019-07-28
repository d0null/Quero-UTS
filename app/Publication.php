<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function researchLine()
    {
        return $this->belongsTo(ResearchLine::class);
    }
}
