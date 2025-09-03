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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //judul buku
            $table->string('slug')->unique(); //slug buku
            $table->year('yer_published');

            $table->foreignId('author_id')->constrained(
                table: 'users',
                indexName: 'books_author_id'
            )->onUpdate('cascade')->onDelete('restrict'); //penulis buku [relasi ke kolom username di table users]

            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'books_category_id'
            )->onUpdate('cascade')->onDelete('restrict'); //kategori buku [relasi ke kolom name di table categories]

            $table->foreignId('publisher_id')->constrained(
                table: 'publishers',
                indexName: 'books_publisher_id'
            )->onUpdate('cascade')->onDelete('restrict'); //kategori buku [relasi ke kolom name di table categories]
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
