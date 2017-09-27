<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePontosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pontos', function (Blueprint $table) {
          $table->increments('id');
          $table->bigInteger('categoria_parceiro_id')->unsigned();
          $table->bigInteger('proprietario_id')->unsigned();

          $table->string('nome', 100);
          $table->text('descricao');
          $table->decimal('latitude', 20, 14);
          $table->double('longitude', 20, 14);
          $table->string('cidade', 100);
          $table->string('uf', 100);
          $table->string('pais', 100);
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
        Schema::dropIfExists('pontos')->onDelete('cascade');
    }
}
