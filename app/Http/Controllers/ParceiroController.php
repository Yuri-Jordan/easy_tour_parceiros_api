<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parceiro;

class ParceiroController extends Controller
{

    protected $parceiro;

    public function __construct(Parceiro $p){
      $this->parceiro = $p;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p = $this->parceiro->getAllParceiros();

        for ($i = 0; $i < sizeof($p); $i++) {
            $p[$i]->categoriaParceiro;
            $p[$i]->pontos;
          }
        return $p;

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

    public function parceirosAdmin()
    {
        return datatables()->of(Parceiro::all())->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {

       return $this->parceiro->criarParceiros($request);

     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {

       $p = $this->parceiro->buscarParceiros($id);

       if(!$p) return 'não encontrado';

        $p->categoriaParceiro;
        $p->pontos;
       return $p;

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

    public function editPost(Request $req, $id)
    {
        return $this->update($req, $id);
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
       $cp = $this->parceiro->atualizarParceiros($request, $id);
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
       $cp = $this->parceiro->excluirParceiros($id);
       if(!$cp) return 'não encontrado';

       return $cp;
     }
}
