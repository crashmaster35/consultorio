<?php
namespace App\Services;

use Auth;
use App\Client;

class UserService 
{

	public function __construct(Client $client)
    {
        $this->client = $client;
    }
	public function getProspects()
	{
		return $this->client->where('state', 'Prospecto')->get();
	}
}