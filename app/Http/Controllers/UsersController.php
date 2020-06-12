<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUsers;
use App\Http\Requests\UpdateUsers;
use Illuminate\Support\Facades\Auth;
use App\Roler;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $usuarios = User::all();
        return view ( 'usuario.index', compact ( 'usuarios' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        if (Auth::user()->can('delete', Auth::user())) {
            $usuarios = User::all();
        }else{
            
        $usuarios = Auth::user();
        }
        
     
        return view ( 'usuario.create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsers $data, User $usuario)
    {
      
        $data->password = Hash::make($data->password);
        
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        return view('usuario.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        $rolers = Roler::all();
        return view('usuario.edit', compact('usuario', 'rolers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsers $request, User $usuario)
    {
     //   dd($request);
        $usuario->name =   $request->name;
        $usuario->username =   $request->username;
        $usuario->email =   $request->email;
        
        //$data = $request->all();
   
//       

     
        if($request->password != null){
            
            $usuario->password = Hash::make($request->password);
        }
        else{
            unset($usuario->password);
        }
            $usuario->save();
            if (isset($request->roler)) {
            $usuario->roler()->detach();
            $usuario->roler()->attach($request->roler);
            }
           ;
        
        
        return redirect()->action('UsersController@create')->with('success', 'Usuário editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->action('UsersController@create')->with('success', 'Usuário cadastrado com sucesso');
    }
}
