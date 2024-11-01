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
        Schema::create('book_publisher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id');
            $table->foreignId('publisher_id');
            // $table->foreign('book_id')->references('id')->on('books');
            // $table->foreign('publisher_id')->references('id')->on('publishers');
            $table->unique(['book_id', 'publisher_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_publisher');
    }
};
