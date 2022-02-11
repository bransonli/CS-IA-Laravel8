<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    } 
}
