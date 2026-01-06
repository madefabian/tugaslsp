<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
Schema::create('artikels', function (Blueprint $table) {
    $table->id();
    $table->string('judul');
    $table->string('slug')->unique();
    $table->string('thumbnail')->nullable();
    $table->text('konten');
    $table->string('penulis')->nullable();
    $table->timestamp('published_at')->nullable();
    $table->timestamps();
});


    }

    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
