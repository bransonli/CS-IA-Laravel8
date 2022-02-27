<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    } 
    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
