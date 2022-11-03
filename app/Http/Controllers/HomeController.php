<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    //    $role= Role::create(['name'=>'writer']);
    // $role= Role::findById(1);
    //    $permission = permission::create(['name'=>'edit post']);
    // $permission = permission::findById(1);
    // $role->givPermissionTo(permission);
    //     return view('home');
    //     auth()->user()->givepermissionTo('edit post');
    $role = Role::findByName('Admin');

$role->revokePermissionTo('edit-users');
$user = User::first();

$user->revokePermissionTo('edit-users');
    }
}
