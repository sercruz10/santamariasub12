<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sergio', function (Blueprint $table) {
            // Metadados da tabela (como no dump)
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_bin';

            // Chave primária
            $table->increments('id'); // se quiseres sem auto-incremento: integer('id')->primary();

            // Colunas
            $table->text('full_name')->nullable();
            $table->text('name')->nullable();
            $table->text('year')->nullable();
            $table->date('full_birthday')->nullable();
            $table->text('position')->nullable();
            $table->text('number')->nullable();
            $table->text('isCaptain')->nullable();
            $table->text('birthday')->nullable();
            $table->text('shirtSize')->nullable();
            $table->integer('active')->default(1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sergio');
    }
};
