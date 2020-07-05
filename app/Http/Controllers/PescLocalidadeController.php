<?php

namespace App\Http\Controllers;

use App\Pesc_localidade;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Pesc_municipio;
use Illuminate\Support\Facades\DB;

class PescLocalidadeController extends Controller
{
    
    
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   
    public function index(Request $request, Pesc_localidade $data)
    {
      
        $data = DB::table('pesc_localidades')->select('id','localidade')->get();
        
           
        if ($request->ajax()) {
            return DataTables::of($data)->toJson();
        }
        
        return view('pesc_localidade.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $localidades = Pesc_localidade::with('pesc_municipio')->get();
        $municipios = Pesc_municipio::all();
        return view ( 'pesc_localidade.create', compact('localidades', 'municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesc_localidade = new Pesc_localidade();
        $pesc_localidade->localidade =   $request->localidade;
        $pesc_localidade->municipio_id =   $request->municipio_id;
        $pesc_localidade->save();
        return redirect()->action('PescLocalidadeController@create')->with('success', 'Localidade criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pesc_localidade  $pesc_localidade
     * @return \Illuminate\Http\Response
     */
    public function show(Pesc_localidade $pesc_localidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pesc_localidade  $pesc_localidade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pesc_localidade = Pesc_localidade::find($id);
        
        $municipios = Pesc_municipio::all();
        
        return view('pesc_localidade.edit', compact('pesc_localidade', 'municipios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pesc_localidade  $pesc_localidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pesc_localidade = Pesc_localidade::find($id);
        $pesc_localidade->localidade =   $request->localidade;
        $pesc_localidade->municipio_id =   $request->municipio_id;
        
        $pesc_localidade->save();
        return redirect()->action('PescLocalidadeController@create')->with('success', 'Loalidade editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pesc_localidade  $pesc_localidade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesc_localidade = Pesc_localidade::find($id);
        $pesc_localidade->delete();
        return redirect()->action('PescLocalidadeController@create')->with('success', 'Localidade excluída com sucesso!');
    }
}
