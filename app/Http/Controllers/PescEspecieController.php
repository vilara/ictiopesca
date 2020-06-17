<?php

namespace App\Http\Controllers;

use App\User;
use App\Pesc_especie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PescEspecieController extends Controller
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
    public function create()
    {
        if (Auth::user()->can('delete', Auth::user())) {
            $usuarios = User::all();
        }else{
            
            $usuarios = Auth::user();
        }
        
        $especies = Pesc_especie::all();
        return view ( 'pesc_especie.create', compact('usuarios', 'especies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesc_especie = new Pesc_especie;
        $pesc_especie->cat =   $request->cat;
        if(isset($request->cat_trof)){
            $pesc_especie->cat_trof =   $request->cat_trof;
        }else{
            $pesc_especie->cat_trof =   '-';
        }
        
        $pesc_especie->save();
        return redirect()->action('PescEspecieController@create')->with('success', 'Espécie criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pesc_especie  $pesc_especie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesc_especie = Pesc_especie::find($id);

        return view('pesc_especie.show', compact('pesc_especie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pesc_especie  $pesc_especie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pesc_especie = Pesc_especie::find($id);
        
        return view('pesc_especie.edit', compact('pesc_especie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pesc_especie  $pesc_especie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pesc_especie = Pesc_especie::find($id);
        $pesc_especie->cat =   $request->cat;
        if(isset($request->cat_trof)){
        $pesc_especie->cat_trof =   $request->cat_trof;
        }else{
            $pesc_especie->cat_trof =   '-';
        }
        
        $pesc_especie->save();
        return redirect()->action('PescEspecieController@create')->with('success', 'Espécie editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pesc_especie  $pesc_especie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesc_especie = Pesc_especie::find($id);
        $pesc_especie->delete();
        return redirect()->action('PescEspecieController@create')->with('success', 'Espécie excluída com sucesso!');
    }
}
