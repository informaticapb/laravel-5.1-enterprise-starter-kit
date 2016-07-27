<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('clientes', function(Blueprint $table) {
		/** id = codcliente */
            $table->increments('id')->unsigned();
            $table->string('nome', 100)->unique();
            $table->string('insc_estadual', 40)->nullable();
            $table->string('tel1', 20)->nullable();
            $table->string('tel2', 20)->nullable();
            $table->string('celular', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->mediumText('obs')->nullable();
            $table->string('email', 50)->nullable();
            $table->string('site', 50)->nullable();
            $table->string('contato', 100)->nullable();
            $table->string('tel1_contato', 20)->nullable();
            $table->string('tel2_contato', 20)->nullable();
            $table->string('logradouro', 100)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('cep', 10)->nullable();
            $table->string('cidade',50)->nullable();
            $table->string('estado',2)->nullable();
            $table->string('ref_endereco',75)->nullable();
            $table->string('logradouro_entrega', 100)->nullable();
            $table->string('bairro_entrega', 50)->nullable();
            $table->string('cep_entrega', 10)->nullable();
            $table->string('cidade_entrega', 50)->nullable();
            $table->string('estado_entrega', 2)->nullable();
            $table->string('logradouro_cobranca', 100)->nullable();
            $table->string('bairro_cobranca', 50)->nullable();
            $table->string('cep_cobranca', 10)->nullable();
            $table->string('cidade_cobranca', 50)->nullable();
            $table->string('estado_cobranca', 2)->nullable();
            $table->boolean('endereco_entrega_value')->default(false);
            $table->boolean('endereco_cobranca_value')->default(false);
            $table->string('cpfcnpj',30)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();            
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
        //
    }
}
