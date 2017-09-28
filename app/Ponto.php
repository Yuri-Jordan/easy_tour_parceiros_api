<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Ponto;

class Ponto extends Model
{
    protected $fillable = ['categoria_ponto_id',
                            'proprietario_id',
                            'nome',
                            'descricao',
                            'latitude',
                            'longitude',
                            'cidade',
                            'uf',
                            'pais',
                            'media_avaliacao',
                            'qte_avaliacoes'
                          ];

    public function getAllPontos(){
      return self::all();
    }


    public function criarPontos(Request $request){
      $c = new Ponto();
      $c->fill($request->all());
      $c->save();
      return $c;
    }


    public function buscarPontos($id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      return $cp;
    }

    public function excluirPontos($id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      $cp->delete();
      return $cp;

    }

    public function atualizarPontos(Request $req, $id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      $cp->fill($req->all());
      $cp->save();

      return  $cp;
    }
}
