<?php

namespace App\Http\Controllers;

use App\Models\modelos;
use App\Models\veiculos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VeiculosController extends AuthController
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $retorno = false;
        $request->validate([
            'preco' => 'required|int'
        ]);
        if (Auth::check()) {
            $model = new veiculos();
            $retorno = $model->registrarVeiculo($request->all());
        }

        $user = Auth::user();
        return response()->json(['sucess'=>$retorno]);
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
     * @param  \App\Models\veiculos  $veiculos
     * @return \Illuminate\Http\Response
     */
    public function show(veiculos $veiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\veiculos  $veiculos
     * @return \Illuminate\Http\Response
     */
    public function edit(veiculos $veiculos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\veiculos  $veiculos
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $retorno = false;
        $request->validate([
            'preco' => 'required|int',
            'id' => 'required|int'
        ]);
        if (Auth::check()) {
            $model = new veiculos();
            $retorno = $model->atualizarVeiculo($request->all());
        }

        $user = Auth::user();
        return response()->json(['sucess'=>$retorno]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\veiculos  $veiculos
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        $retorno = false;
        $request->validate([
            'id' => 'required|int'
        ]);
        if (Auth::check()) {
            $model = new veiculos();
            $retorno = $model->deletarVeiculo($request->all());
        }

        $user = Auth::user();
        return response()->json(['sucess'=>$retorno]);
    }
}
