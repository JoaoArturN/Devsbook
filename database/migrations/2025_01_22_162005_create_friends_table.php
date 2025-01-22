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
        Schema::create('friends', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('follower_id');
            $table->unsignedBigInteger('followed_id');

            // Definindo as chaves estrangeiras
            $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('followed_id')->references('id')->on('users')->onDelete('cascade');

            // Garantir que não haja duplicação de relações (follower -> followed e followed -> follower)
            $table->unique(['follower_id', 'followed_id']);
            $table->unique(['followed_id', 'follower_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friends');
    }
};
