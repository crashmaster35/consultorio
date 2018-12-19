<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Permissions;
use App\Services\ClientService;
use App\Services\UserService;

use Redirect;

class ClientController extends Controller
{
     public function __construct(Permissions $permissions, UserService $userService)
    {
        $this->permissions = $permissions;
        $this->module = 'admin.patient';
        $this->userService = $userService;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function prospectIndex()
    {
    	$module = 'admin.prospect';

        if (!$this->permissions->hasReadPermission($module)) {
        	return redirect('/')->with('error', 'Usted no tiene permiso de ingresar a este módulo.');
        }

        return view('admin.prospects.prospect', [
            'user_modules' => $this->permissions->getUserMasterModules(),
            'data' => $this->userService->getProspects()
        ]);
    }    
}
