<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('profiles', function (Blueprint $table) {
      $table->uuid('id')->primary(); // Menggunakan UUID sebagai primary key
      $table->text('biodata');
      $table->tinyInteger('age');
      $table->text('address');
      $table->string('avatar')->nullable();
      $table->foreignId('user_id')->constrained(); // Menghubungkan ke tabel users
      $table->timestamps();
  });
}

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('users');
  }
};
