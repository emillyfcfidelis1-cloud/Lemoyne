<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('card', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('id_funcionario');
            $table->foreign('id_funcionario')->references('id')->on('funcionario')->onDelete('cascade');
            $table->unsignedBigInteger('id_coluna');
            $table->foreign('id_coluna')->references('id')->on('coluna')->onDelete('cascade');
            $table->string('nome');
            $table->text('descricao');
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    Schema::table('card', function (Blueprint $table) {
        $table->dropForeign(['id_funcionario']);
        $table->dropColumn('id_funcionario');
        $table->dropForeign(['id_coluna']);
        $table->dropColumn('id_coluna');

    
        });
    
        
        Schema::dropIfExists('card');
    }
};
