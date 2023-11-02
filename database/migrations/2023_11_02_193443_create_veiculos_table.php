<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->float('preco');
            $table->string('path_img');
            $table->string('nome');
            $table->unsignedBigInteger('id_marca');
            $table->unsignedBigInteger('id_modelo');

            $table->foreign('id_marca')->references('id')->on('marcas');
            $table->foreign('id_modelo')->references('id')->on('modelos');

        });

        DB::table('veiculos')->insert(array('nome'=>'golf','preco'=>15000.00,'path_img'=>'caminho_da_imagem','id_marca'=>1,'id_modelo'=>1));
        DB::table('veiculos')->insert(array('nome'=>'golf','preco'=>15000.00,'path_img'=>'caminho_da_imagem','id_marca'=>1,'id_modelo'=>2));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
};
