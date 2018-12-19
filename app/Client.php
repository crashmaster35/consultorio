<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function doctors()
    {
    	return $this->belongsToMany(User::class);
    }
}
