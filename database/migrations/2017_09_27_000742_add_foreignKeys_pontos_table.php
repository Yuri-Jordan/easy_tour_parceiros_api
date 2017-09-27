<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysPontosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pontos', function(Blueprint $table){
          $table->foreign('proprietario_id')->references('id')->on('parceiros');
          $table->foreign('categoria_parceiro_id')->references('id')->on('categoria_parceiros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      // Schema::table('pontos', function(Blueprint $table){
      //   $table->dropForeign('pontos_categoria_parceiro_id_foreign');
      //   $table->dropForeign('pontos_parceiro_id_foreign');
      // });
    }
}
