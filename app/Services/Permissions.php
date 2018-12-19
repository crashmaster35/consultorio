<?php
namespace App\Services;

use Auth;
use App\SystemModule;
use App\Permission;

class Permissions 
{

	public function getUserMasterModules() 
	{
		//dd(Auth::user());
		if (Auth::check()){
			$modules = json_decode(Auth::user()->userProfile->permits);
			$x = 0;
			foreach ($modules as $key => $module) {
				$temp_module = SystemModule::where('id', $key)->where('parent', 0)->first();
				if (!is_null($temp_module)) {
					$user_modules[$x]['module'] = $temp_module;
					foreach ($module as $permit) {
						$permits = Permission::where('id', $permit)->first();
						if (!is_null($permits)) {
							$user_modules[$x]['permission'][] = $permits->name;	
						}
					}
					$x++;
				}
			}
			return $user_modules;
		} else {
			return null;
		}
	}

	public function getUserAllModules() 
	{
		$modules = json_decode(Auth::user()->userProfile->permits);
		$x = 0;
		foreach ($modules as $key => $module) {
			$temp_module = SystemModule::where('id', $key)->first();
			if (!is_null($temp_module)) {
				$user_modules[$x]['module'] = $temp_module;
				foreach ($module as $permit) {
					$permits = Permission::where('id', $permit)->first();
					if (!is_null($permits)) {
						$user_modules[$x]['permission'][] = $permits->name;	
					}
				}
				$x++;
			}
		}
		return $user_modules;
	}	

	public function hasChildren($module_id)
	{
		return (SystemModule::where('parent', $module_id)->count() > 0)?true:false;
	}

	public function getChildren($module_id)
	{
		return SystemModule::where('parent', $module_id)->get();
	}

	public function hasReadPermission($module)
	{
		if (Auth::check()){
			$module_id = SystemModule::where('view', $module)->first()->id;
			$modules = json_decode(Auth::user()->userProfile->permits);

			if (!is_null($modules->$module_id)) {
				$permits = $modules->$module_id;
				
				foreach ($permits as $value) {
					$own = Permission::where('id', $value)->first();
					$all = Permission::where('id', $value)->first();

					$ownp = '';
					$allp = '';

					if (!is_null($own)) {
						$ownp = $own->name;
					}

					if (!is_null($all)) {
						$allp = $all->name;
					}

					if (($ownp == 'READ_OWN') || ($allp == 'READ_ALL')) {
						return true;
					}
				}
				return false;
			} else {
				return false;
			}
		}
	}

	public function hasReadOwnPermission($module)
	{
		if (Auth::check()){
			$module_id = SystemModule::where('view', $module)->first()->id;
			$modules = json_decode(Auth::user()->userProfile->permits);

			if (!is_null($modules->$module_id)) {
				$permits = $modules->$module_id;
				
				foreach ($permits as $value) {
					$own = Permission::where('id', $value)->first();

					$ownp = '';

					if (!is_null($own)) {
						$ownp = $own->name;
					}

					if (($ownp == 'READ_OWN')) {
						return true;
					}
				}
				return false;
			} else {
				return false;
			}
		}
	}	

	public function hasCreatePermission($module)
	{
		if (Auth::check()){
			$module_id = SystemModule::where('view', $module)->first()->id;
			$modules = json_decode(Auth::user()->userProfile->permits);

			if (!is_null($modules->$module_id)) {
				$permits = $modules->$module_id;
				
				foreach ($permits as $value) {
					$own = Permission::where('id', $value)->first();
					$all = Permission::where('id', $value)->first();

					$ownp = '';
					$allp = '';

					if (!is_null($own)) {
						$ownp = $own->name;
					}

					if (!is_null($all)) {
						$allp = $all->name;
					}

					if (($ownp == 'CREATE_OWN') || ($allp == 'CREATE_ALL')) {
						return true;
					}
				}
				return false;
			} else {
				return false;
			}
		}
	}	

	public function hasUpdatePermission($module)
	{
		if (Auth::check()){
			$module_id = SystemModule::where('view', $module)->first()->id;
			$modules = json_decode(Auth::user()->userProfile->permits);

			if (!is_null($modules->$module_id)) {
				$permits = $modules->$module_id;
				
				foreach ($permits as $value) {
					$own = Permission::where('id', $value)->first();
					$all = Permission::where('id', $value)->first();

					$ownp = '';
					$allp = '';

					if (!is_null($own)) {
						$ownp = $own->name;
					}

					if (!is_null($all)) {
						$allp = $all->name;
					}

					if (($ownp == 'UPDATE_OWN') || ($allp == 'UPDATE_ALL')) {
						return true;
					}					
				}
				return false;
			} else {
				return false;
			}
		}
	}	

	public function hasDeletePermission($module)
	{
		if (Auth::check()){
			$module_id = SystemModule::where('view', $module)->first()->id;
			$modules = json_decode(Auth::user()->userProfile->permits);

			if (!is_null($modules->$module_id)) {
				$permits = $modules->$module_id;
				
				foreach ($permits as $value) {
					$own = Permission::where('id', $value)->first();
					$all = Permission::where('id', $value)->first();

					$ownp = '';
					$allp = '';

					if (!is_null($own)) {
						$ownp = $own->name;
					}

					if (!is_null($all)) {
						$allp = $all->name;
					}

					if (($ownp == 'DELETE_OWN') || ($allp == 'DELETE_ALL')) {
						return true;
					}					
				}
				return false;
			} else {
				return false;
			}
		}
	}		
}