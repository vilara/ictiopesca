<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProfile($id)
    {
        $usuario = User::find($id);
        return view('profile.create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data, Profile $profile)
    {
        $profile->create([
            'user_id' => $data['user_id'],
            'instituicao' => $data['instituicao'],
            'perfil' => $data['perfil'],
        ]);
        
        
        return redirect('/usuarios')->with ('success', 'Perfil de usuário cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profiles = Profile::find($id);
        $usuarios = User::where('id', '=', '$profiles->user_id')->get();
        return view('profile.show', compact('profiles','usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $profiles = Profile::find($id);
        return view('profile.edit', compact('profiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $profiles = Profile::find($id);
        $profiles->update($data);
        return redirect('/usuarios')->with ('success', 'Perfil de usuário editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profiles = Profile::find($id);
        $profiles->delete();
        return redirect('/usuarios')->with ('success', 'Perfil de suário excluído com sucesso');
    }
}
