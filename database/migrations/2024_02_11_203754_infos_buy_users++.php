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
            $table->string('cidade')->after('cep');
            $table->string('identificao')->after('cidade');
            $table->string('proficao')->after('identificao');
            $table->string('nacionalidade')->after('proficao');
            $table->string('estado')->after('nacionalidade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropColumn('cidade');
        $table->dropColumn('identificao');
        $table->dropColumn('proficao');
        $table->dropColumn('nacionalidade');
        $table->dropColumn('estado');
    }
};
