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
        Schema::table('books', function (Blueprint $table) {
            $table->decimal('price', 10, 2);
            $table->timestamps();

            $table->dropColumn('status');
        });

        Schema::table('authors', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('people', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('rescued_books', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::create('book_units', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('book_id');
            $table->enum('status', ['F', 'S', 'R'])->default('F')->comment('F = free, S = requested, R = rescued');
            $table->timestamps();
        });

        // Adding foreign key constraints
        Schema::table('book_units', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_units');

        Schema::table('rescued_books', function (Blueprint $table) {
            $table->dropTimestamps();
        });
        
        Schema::table('people', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('authors', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropTimestamps();
            $table->enum('status', ['F', 'S', 'R'])->default('F')->comment('F = free, S = requested, R = rescued');
        });
    }
};
