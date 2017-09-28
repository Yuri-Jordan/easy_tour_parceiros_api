<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\CategoriaPonto;

class CategoriaPonto extends Model
{

    protected $fillable = ['nome', 'tipo'];

    public function getAllCategoriaPontos(){
      return self::all();
    }


    public function criarCategoriaPontos(Request $request){
      $c = new CategoriaPonto();
      $c->nome = $request['nome'];
      $c->tipo = $request['tipo'];
      $c->save();
      return $c;
    }


    public function buscarCategoriaPontos($id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      return $cp;
    }

    public function excluirCategoriaPontos($id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      $cp->delete();
      return $cp;

    }

    public function atualizarCategoriaPontos(Request $req, $id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      $cp->fill($req->all());
      $cp->save();

      return  $cp;
    }
}
