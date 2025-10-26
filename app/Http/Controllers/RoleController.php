<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{

    
    public function index(App $app) {
        
        return view("components.roles.roles", [
            "app" => $app
        ]);
        
    }
    
    
    public function store(App $app) {
        
        $role = new Role();
        $role->name = request()->name;
        $role->app_id = $app->id;
        $role->save();
        
        return redirect("/apps/$app->id/roles");
        
    }
    
    public  function edit(Role $role) {

        return view("components.roles.roles", [
            "selectedRole" => $role,
            "app" => $role->app
        ]);
        
    }
    
    public  function update(Role $role) {
        
        
        $role->name = request()->name;
        $role->save();
        
        return redirect("/roles/$role->id");
        
    }
    
    public function delete(Role $role) {
        
        $role->delete();
        
        $app = $role->app;
        
        return redirect("/apps/$app->id/roles");
        
    }
    
}
