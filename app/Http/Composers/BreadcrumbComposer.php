<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use Route;

/**
 * 
 */
class BreadcrumbComposer {
	
	function compose(View $view)
	{
		$route = Route::getCurrentRoute()->uri;
		$explode = explode('/', $route);
//dd($explode);
		$uri = [];

		$uri['first'][0]['url'] = '/';
		$uri['first'][0]['name'] = 'Inicio';
		$route = '';

		for ($i=0; $i < count($explode) - 1 ; $i++) { 
			if ($explode[$i] != '') {
				$uri['middle'][$i+1]['url'] = $route . '/' . $explode[$i];
				$uri['middle'][$i+1]['name'] = ucfirst($explode[$i]);
				$route .= '/' . $explode[$i];
			}
		}
		$last = count($uri) + 1;
		$uri['last'][$last]['url'] = $route . '/' . $explode[count($explode)-1];
		$uri['last'][$last]['name'] = ucfirst($explode[count($explode)-1]);

		$view->with('breadcrumb', $uri);
	}
}