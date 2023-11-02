<?php

namespace App\Http\Controllers;

use App\Models\marcas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarcasController extends AuthController
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
            'nome_marca' => 'required|string'
        ]);
        if (Auth::check()) {
            $model = new marcas();
            $retorno = $model->registrarMarca($request->all());
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
     * @param  \App\Models\marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function show(marcas $marcas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function edit(marcas $marcas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\marcas  $marcas
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $retorno = false;
        $request->validate([
            'nome_marca' => 'required|string',
            'id' => 'required|int'
        ]);
        if (Auth::check()) {
            $model = new marcas();
            $retorno = $model->atualizarMarca($request->all());
        }

        $user = Auth::user();
        return response()->json(['sucess'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\marcas  $marcas
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        $retorno = false;
        $request->validate([
            'id' => 'required|int'
        ]);
        if (Auth::check()) {
            $model = new marcas();
            $retorno = $model->deletarMarca($request->all());
        }

        $user = Auth::user();
        return response()->json(['sucess'=>true]);
    }
}
