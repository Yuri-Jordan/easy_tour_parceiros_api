<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParceirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parceiros', function (Blueprint $table) {

            $table->increments('id');
            $table->bigInteger('categoria_parceiros_id')->unsigned()->index();
            $table->foreign('categoria_parceiros_id')
                  ->references('id')
                  ->on('categoria_parceiros')
                  ->onDelete('cascade');

            $table->char('cnpj', 14);
            $table->string('razao_social', 100);
            $table->string('nome_fantasia', 100);
            $table->decimal('latitude', 20, 14);
            $table->double('longitude', 20, 14);
            $table->string('logradouro', 100);
            $table->string('numero', 8);
            $table->string('complemento', 100);
            $table->string('cep', 8);
            $table->string('bairro', 80);
            $table->string('municipio', 80);
            $table->string('uf', 2);
            $table->string('pais', 100);
            $table->string('email', 100);
            $table->string('telefone', 11);
            $table->string('responsavel', 100);
            $table->text('descricao');
            $table->decimal('media_avaliacao', 5, 4);
            $table->bigInteger('qte_avaliacoes');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parceiros');
    }
}
