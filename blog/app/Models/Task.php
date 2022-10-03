<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{


    use HasFactory;


    public function isComplete()
    {
        return false;
    }

    public function scopeInComplete($query)
    {
        return $query->where('completed',0);
    }






}
