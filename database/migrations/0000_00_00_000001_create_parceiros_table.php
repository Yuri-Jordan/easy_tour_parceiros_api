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
            $table->bigInteger('categoria_parceiros_id')->unsigned();
            $table->foreign('categoria_parceiros_id')
                  ->references('id')
                  ->on('categoria_parceiros')
                  ->onDelete('cascade');
            $table->char('cpf', 11);
            $table->char('cnpj', 14);
            $table->string('nome_fantasia', 100);
            $table->string('razao_social', 100);
            $table->string('endereco', 100);

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
