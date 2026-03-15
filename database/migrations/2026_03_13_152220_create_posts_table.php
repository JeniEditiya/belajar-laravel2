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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            // relasi ke users
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // relasi ke categories
            $table->foreignId('category_id')->constrained()->onDelete('cascade');

            // data post
            $table->string('title');
            $table->string('slug');
            $table->text('content');

            // gambar post
            $table->string('featured_image')->nullable();

            // status publish
            $table->boolean('status')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};