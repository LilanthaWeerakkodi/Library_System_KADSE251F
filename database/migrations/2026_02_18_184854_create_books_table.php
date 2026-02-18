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
        $table->id();                     // Creates a unique ID (1, 2, 3...)
        $table->string('title');          // Creates a column for Book Name
        $table->string('author');         // Creates a column for Author Name
        $table->string('isbn');           // Creates a column for ISBN Number
        $table->timestamps();             // Creates 'created_at' and 'updated_at'
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
