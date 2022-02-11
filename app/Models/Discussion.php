<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    } 
}
