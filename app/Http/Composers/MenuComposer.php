<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use Route;
use App\Services\Permissions;

/**
 * 
 */
class MenuComposer {
	
	function compose(View $view)
	{
		$route = Route::getCurrentRoute()->getName();

		$permissions = new Permissions();

		$masterModules = $permissions->getUserMasterModules();
		
		$a = [];
		$b = [];

		if (!in_array($route, config('constants.composer_exception'))) {
			foreach ($masterModules as $modules) {
				if ($permissions->hasChildren($modules['module']->id)) {
					foreach ($permissions->getChildren($modules['module']->id) as $children) {
						if ($route == $children->view) {
							$a[$modules['module']->id] = 'active open';
							$b[$children->id] = 'active';
							//dd($route, $children->view, $a, $b);
						} else {
							if (!isset($a[$modules['module']->id])) {
								$a[$modules['module']->id] = '';
							}
							$b[$children->id] = '';
						}
					}
				} else {
					if ($route == $modules['module']->view) {
						$a[$modules['module']->id] = 'active';
					} else {
						$a[$modules['module']->id] = '';
					}
				}
			}
		}

		$prospect = 0;
		$clients = 0;
		$cp = 0;
		$programmed = 0;
		$finished = 0;
		$percent = 0;

		// Calculate the percentages of prospects and finished dates.
		$total = $prospect + $clients;

		if ($total > 0) {
			$pp = ($prospect * 100) / $total;
			$cp = ($clients * 100) / $total;

			$percent = ($finished * 100) / $programmed;
		}

		$view->with(['a' => $a, 'b' => $b, 'prospect' => $prospect, 'clients' => $clients, 'percent' => number_format($cp, 2, '.', ''), 'programmed' => $programmed, 'finished' => $finished, 'dpercent' => number_format($percent, 2, '.', '')]);
	}
}