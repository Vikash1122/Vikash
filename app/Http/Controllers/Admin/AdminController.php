<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Hash;
use Spatie\Permission\Traits\HasRoles;

class AdminController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
   
    public function index()
    {
    	//Role::create(['name'=>'admin']);
    	//Permission::create(['name'=>'edit']);
    	// $role = Role::findById(3);
    	// $permission = Permission::findById(1);
    	// $role->givePermissionTO($permission);

    	// $role = Role::findById(1);
    	// $permission = Permission::findById(1);
    	// $role->revokePermissionTo($permission);

    	//auth()->user()->givePermissionTo('role-delete');
    	//auth()->user()->assignRole('admin');

    	//return auth()->user->permissions;
        return view('admin');
    }
}
