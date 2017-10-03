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

            $table->char('cnpj', 14)->nullable();
            $table->string('razao_social', 100)->nullable();
            $table->string('nome_fantasia', 100);
            $table->decimal('latitude', 20, 14);
            $table->double('longitude', 20, 14);
            $table->string('logradouro', 100)->nullable();
            $table->string('numero', 8)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('cep', 8)->nullable();
            $table->string('bairro', 80)->nullable();
            $table->string('municipio', 80)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('pais', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('telefone', 11)->nullable();
            $table->string('responsavel', 100)->nullable();
            $table->text('descricao')->nullable();
            $table->decimal('media_avaliacao', 5, 4)->nullable();
            $table->bigInteger('qte_avaliacoes')->nullable();

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
