<?php

namespace App\Http\Controllers;

use App\Ponto;
use Illuminate\Http\Request;

class PontoController extends Controller
{
    protected $ponto;

    public function __construct(Ponto $p){
      $this->ponto = $p;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         return $this->ponto->getAllPontos();
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

       return $this->ponto->criarPontos($request);

     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ponto  $ponto
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
         $cp = $this->ponto->buscarPontos($id);
         if(!$cp) return 'não encontrado';

         return $cp;
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ponto  $ponto
     * @return \Illuminate\Http\Response
     */
    public function edit(Ponto $ponto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ponto  $ponto
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {
       $cp = $this->ponto->atualizarPontos($request, $id);
       if(!$cp) return 'não encontrado';

       return $cp;
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ponto  $ponto
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       $cp = $this->ponto->excluirPontos($id);
       if(!$cp) return 'não encontrado';

       return $cp;
     }
}
