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
            $table->string('cpf',14)->after('email')->nullable();
            $table->string('uf')->after('cpf')->nullable();
            $table->string('endereco')->after('uf')->nullable();
            $table->string('cep',9)->after('endereco')->nullable();
            $table->string('cidade')->after('cep')->nullable();
            $table->string('identificao')->after('cidade')->nullable();
            $table->string('proficao')->after('identificao')->nullable();
            $table->string('nacionalidade')->after('proficao')->nullable();
            $table->string('estado')->after('nacionalidade')->nullable();
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
