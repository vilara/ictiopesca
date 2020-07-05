<?php

namespace App\Http\Controllers;

use App\Pesc_mercado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;


class PescMercadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
                
        if ($request->ajax()) {
            

            $mercado = DB::table('pesc_col_mercado')->select('pesc_col_mercado.id');
//             ->join('pesc_especies', 'pesc_col_mercado.cat', '=', 'pesc_especies.id')
//             ->join('pesc_localidades', 'pesc_col_mercado.loc', '=', 'pesc_localidades.id')
            
//                 'pesc_especies.cat','pesc_localidades.localidade',
//                     'pesc_col_mercado.ct','pesc_col_mercado.cp','pesc_col_mercado.pt',
//                     'pesc_col_mercado.cab','pesc_col_mercado.sexo','pesc_col_mercado.cresc',
//                 'pesc_col_mercado.gg','pesc_col_mercado.gr','pesc_col_mercado.data'
//                 'pesc_col_mercado.cf',
//                 'pesc_col_mercado.gen','pesc_col_mercado.od','pesc_col_mercado.ap',
              
//             'pesc_col_mercado.','pesc_col_mercado.','pesc_col_mercado.',
            return Datatables::of($mercado)->make(true);
        }
        
        return view('pesc_mercado.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pesc_mercado  $pesc_mercado
     * @return \Illuminate\Http\Response
     */
    public function show(Pesc_mercado $pesc_mercado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pesc_mercado  $pesc_mercado
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesc_mercado $pesc_mercado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pesc_mercado  $pesc_mercado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesc_mercado $pesc_mercado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pesc_mercado  $pesc_mercado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesc_mercado $pesc_mercado)
    {
        //
    }
}
