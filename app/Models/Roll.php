<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roll extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
