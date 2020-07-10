<?php

namespace App\Http\Controllers;

use App\Pesc_localidade;
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
        
        $data = Pesc_mercado::with('pesc_especie','pesc_localidade')->select('pesc_col_mercado.*');
        if ($request->ajax()) {
            
            return Datatables::of($data)->make(true);
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
