<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\CategoriaParceiro;

class CategoriaParceiroController extends Controller
{
    protected $cp;

    public function __construct(CategoriaParceiro $catPar){
      $this->cp = $catPar;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->cp->getAllCategoriaParceiros();
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

      return $this->cp->criarCategoriaParceiros($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cp = $this->cp->buscarCategoriaParceiros($id);
        if(!$cp) return 'não encontrado';

        return $cp;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $cp = $this->cp->atualizarCategoriaParceiro($request, $id);
      if(!$cp) return 'não encontrado';

      return $cp;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cp = $this->cp->excluirCategoriaParceiros($id);
      if(!$cp) return 'não encontrado';

      return $cp;
    }
}
