<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\CategoriaParceiro;

class CategoriaParceiro extends Model
{

    protected $fillable = ['nome'];

    public function parceiros()
    {

        return $this->hasMany('App\Parceiro', 'categoria_parceiros_id');

    }

    public function getAllCategoriaParceiros(){
      return self::all();
    }


    public function criarCategoriaParceiros(Request $request){
      $c = new CategoriaParceiro();
      $c->nome = $request['nome'];
      $c->save();
      return $c;
    }


    public function buscarCategoriaParceiros($id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      return $cp;
    }

    public function excluirCategoriaParceiros($id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      $cp->delete();
      return $cp;

    }

    public function atualizarCategoriaParceiros(Request $req, $id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      $cp->fill($req->all());
      $cp->save();

      return  $cp;
    }
}
