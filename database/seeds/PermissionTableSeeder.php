<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$matriz = [
			[
				'name'  => 'READ_OWN',
			],
			[
				'name'  => 'CREATE_OWN',
			],
			[
				'name'  => 'UPDATE_OWN',
			],
			[
				'name'  => 'DELETE_OWN',
			],
			[
				'name'  => 'READ_ALL',
			],
			[
				'name'  => 'CREATE_ALL',
			],
			[
				'name'  => 'UPDATE_ALL',
			],
			[
				'name'  => 'DELETE_ALL',
			]
		];

		foreach ($matriz as $item) {
			Permission::create($item);
		}
    }
}
