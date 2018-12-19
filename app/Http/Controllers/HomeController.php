<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Permissions;

class HomeController extends Controller
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

        return view('admin.home', [
            'user_modules' => $this->permissions->getUserMasterModules()
        ]);
    }
}
