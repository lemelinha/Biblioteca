<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', length: 255);
            $table->text('description');
            $table->uuid('author_id');
            $table->enum('status', ['F', 'S', 'R'])->default('F')->comment('F = free, S = requested, R = rescued');
        });
        
        Schema::create('authors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', length: 255);
            $table->date('birth');
        });

        Schema::create('people', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', length: 255);
            $table->string('cpf', length: 11)->unique();
            $table->decimal('debt', total: 10, places: 2)->default(0);
        });

        Schema::create('rescued_books', function (Blueprint $table) {
            $table->uuid('book_id');
            $table->uuid('person_id');
            $table->date('rescued_date')->default(FacadesDB::raw('CURRENT_DATE'));
            $table->boolean('returned')->default(false);
            $table->date('returned_date')->nullable();
            $table->primary(['book_id', 'person_id', 'rescued_date']);
        });

        // Adding Indexes
        Schema::table('books', function (Blueprint $table) {
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
        });

        Schema::table('rescued_books', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rescued_books', function (Blueprint $table) {
            $table->dropForeign(['book_id']);
            $table->dropForeign(['person_id']);
        });
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
        });

        Schema::dropIfExists('rescued_books');
        Schema::dropIfExists('people');
        Schema::dropIfExists('authors');
        Schema::dropIfExists('books');
    }
};
