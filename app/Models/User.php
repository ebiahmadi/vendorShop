<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function roll()
    {
        return $this->belongsTo(Roll::class);
    }
}
