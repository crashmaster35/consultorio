<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $fillable = [
        's_user_id', 'r_user_id', 'subject', 'body', 'status', 'priority'
    ];

    public function sender() 
    {
    	return $this->hasOne('App\User', 's_user_id');
    }

    public function receiver() 
    {
    	return $this->hasOne('App\User', 'r_user_id');
    }

}
