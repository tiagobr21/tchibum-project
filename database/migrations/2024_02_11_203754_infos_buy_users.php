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
        Schema::table('users', function (Blueprint $table) {
            $table->string('cpf',14)->after('email');
            $table->string('uf')->after('cpf');
            $table->string('endereco')->after('uf');
            $table->string('cep',9)->after('endereco');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpf');
        Schema::dropIfExists('uf');
        Schema::dropIfExists('endereco');
        Schema::dropIfExists('cep');
    }
};
