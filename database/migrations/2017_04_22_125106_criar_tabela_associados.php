<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAssociados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('numero');            
            $table->date('data_nascimento');            
            $table->string('endereco');                        
                                          
            $table->boolean('sexo');                                                        
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
        //Aqui comando para deletar a tabela
        schema::dropifexist('associados');
    }
}
