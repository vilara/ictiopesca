<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\StoreUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    
    
    protected $redirectTo = RouteServiceProvider::HOME;
    
    public  function formCadastro(){
        return view('cadastro');
    }
    
    public function store(StoreUsers $data, User $usuario)
    {
        $usuario->name = $data->name;
        $usuario->username = $data->username;
        $usuario->email = $data->email;        
        $usuario->password = Hash::make($data->password);
        $usuario->ativo = 1;
        $usuario->updated_at = now();  
        $usuario->created_at = now(); 
        $usuario->save();
        $usuario->roler()->attach(4);
        
        
        
        return redirect()->action('UsersController@create')->with('success', 'Usuário cadastrado com sucesso');
    }
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
      if($request->remember == 1) {
          $remember = true; 
        }
          else{
              $remember =  false;
            }
            if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'ativo' => 1],$remember)) {
            // Authentication passed...
            return redirect()->intended('home');
        }else{
            return redirect()->intended('/login')->with('success', 'Usuário ou senha incorretos...');;
        }
    }
    
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ])
        ;
        
        
    }
    
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'ativo' => 1,
            'password' => Hash::make($data['password']),
        ]);
    }
    
    public function logout()
    {
       Auth::logout();
       return redirect()->intended('/');
    }
}
