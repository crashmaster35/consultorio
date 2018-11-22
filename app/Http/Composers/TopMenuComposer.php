<?php namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Message;
use Auth;
use Route;

/**
 * 
 */
class TopMenuComposer {
	
	function compose(View $view)
	{
		$route = Route::getCurrentRoute()->getName();

		if (!in_array($route, config('constants.composer_exception'))) {
			// Obtain the not readed messages from database.
			$messages = Message::where('status', 'sended')->where('r_user_id', Auth::user()->id)->count();
		} else {
			$messages = '';
		}

		$view->with('messages', $messages);
	}
}