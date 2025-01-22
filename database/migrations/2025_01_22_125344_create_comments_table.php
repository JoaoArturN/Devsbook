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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('body');

            $table->foreignId('user_id')
                ->constrained() // Relaciona com a tabela users
                ->onDelete('cascade'); // Se o usuário for deletado, os comentários também serão deletados

            $table->foreignId('post_id')
                ->constrained() // Relaciona com a tabela posts
                ->onDelete('cascade'); // Se o post for deletado, os comentários também serão deletados

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
