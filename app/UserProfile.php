<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    
    protected $fillable = ['name', 'permits'];

	public function users()
	{
		return $this->hasMany('App\User', 'user_profile_id', 'id');
	}
}
