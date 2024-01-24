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
        Schema::create('pacotes_opcoes', function (Blueprint $table) {
            $table->unsignedBigInteger('pacote_id');
            $table->unsignedBigInteger('opcao_id');
            $table->primary(['pacote_id', 'opcao_id']);
            $table->foreign('pacote_id')->references('id')->on('pacotes')->onDelete('cascade');
            $table->foreign('opcao_id')->references('id')->on('opcaos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacotes_opcoes');
    }
};
