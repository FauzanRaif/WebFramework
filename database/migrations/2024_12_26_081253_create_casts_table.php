<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id(); // Ini secara otomatis membuat kolom id dengan auto-increment
      $table->string('name');
      $table->tinyInteger('age');
      $table->text('biodata')->nullable();
      $table->string('avatar')->nullable();
      $table->timestamps();
  });
  
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('casts');
  }
};
