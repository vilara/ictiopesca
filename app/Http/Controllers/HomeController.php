<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('home');
    }
    
    public function update(){
        
        
        $permissions = Permission::with('rolers')->get();
        
        foreach ($permissions as $permission){
            
            echo "<b> Permission: $permission->name</b></br>";
            foreach ($permission->rolers as $role){
                echo "<b> Role: $role->name </br>";
            }
            echo "</br></br>";
            
        }
        
        $name_user = auth()->user()->name;
        echo ("<h1>{$name_user}</h1>");
        foreach (auth()->user()->roler as $role){
            echo "<b> Roler: $role->name</b> ->  Permissions:";
            
            $permissions = $role->permission;
            foreach ($permissions as $permission){
                echo " $permission->name  ,  ";
            }
            
            echo '<hr>';
        }
      
    }
}
