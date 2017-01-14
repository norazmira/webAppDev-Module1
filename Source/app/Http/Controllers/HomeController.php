<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function accountant()
    {
        return view('accountant');
    }
    public function accountantclerk()
    {
        return view('accountantclerk');
    }
    public function auditor()
    {
        return view('auditor');
    }
    public function auditorclerk()
    {
        return view('auditorclerk');
    }
    public function companydirector()
    {
        return view('companydirector');
    }
    public function companysecretary()
    {
        return view('companysecretary');
    }
    public function admin()
    {
        // return view('admin');
        $data = User::all(); // get all data 
        return View('admin', compact('data'));
    }

    public function admin2()
    {
        $data = User::all(); // get all data 

        return View('admin2', compact('data'));
    }
    public function update()
    {
        $data = User::all(); // get all data 
        return View('update', compact('data'));
    }

    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'NewUser')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        if ($request['role_accountant']) {
            $user->roles()->attach(Role::where('name', 'Accountant')->first());
        }
        if ($request['role_accountant_clerk']) {
            $user->roles()->attach(Role::where('name', 'AccountantClerk')->first());
        }
        if ($request['role_auditor']) {
            $user->roles()->attach(Role::where('name', 'Auditor')->first());
        }
        if ($request['role_auditor_clerk']) {
            $user->roles()->attach(Role::where('name', 'AuditorClerk')->first());
        }
        if ($request['role_company_director']) {
            $user->roles()->attach(Role::where('name', 'CompanyDirector')->first());
        }
        if ($request['role_company_secretary']) {
            $user->roles()->attach(Role::where('name', 'CompanySecretary')->first());
        }
        return redirect()->back();
    }


}
