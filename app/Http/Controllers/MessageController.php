<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use Auth;
use View;
use App\Services\Permissions;

class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Permissions $permissions)
    {
        $this->permissions = $permissions;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$messages = Message::where('r_user_id', Auth::user()->id)->where('status', 'sended')->orWhere('status', 'opened')->get();
    	//dd(Auth::user()->messages());
		foreach(Auth::user()->messages() as $message) {
			dd($message);
		}
        return View::make('admin.messages', ['data' => $messages, 'user_modules' => $this->permissions->getUserMasterModules()]);
    }
}
