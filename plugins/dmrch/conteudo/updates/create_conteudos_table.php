<?php namespace Dmrch\Conteudo\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateConteudosTable extends Migration
{
    public function up()
    {
        Schema::create('dmrch_conteudo_conteudos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dmrch_conteudo_conteudos');
    }
}
