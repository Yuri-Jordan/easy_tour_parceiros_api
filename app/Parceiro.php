<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Parceiro;
use App\Ponto;
use App\CategoriaParceiro;

class Parceiro extends Model
{

    protected $fillable = ['categoria_parceiros_id',
                            'cpf',
                            'cnpj',
                            'nome_fantasia',
                            'razao_social',
                            'endereco'
                          ];

    public function categoriaParceiro()
    {
      return $this->belongsTo('App\CategoriaParceiro', 'categoria_parceiros_id');
    }

    public function pontos()
    {
      return $this->hasMany('App\Ponto', 'proprietario_id');
    }

    public function getAllParceiros(){

      return self::all();

    }


    public function criarParceiros(Request $request){
      $c = new Parceiro();
      $c->fill($request->all());
      $c->save();
      return $c;
    }


    public function buscarParceiros($id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      return $cp;
    }

    public function excluirParceiros($id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      $cp->delete();
      return $cp;

    }

    public function atualizarParceiros(Request $req, $id){
      $cp = self::find($id);

      if(is_null($cp))
        return false;

      $cp->fill($req->all());
      $cp->save();

      return  $cp;
    }
}
