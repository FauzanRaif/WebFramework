<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToCastMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cast_movie', function (Blueprint $table) {
            $table->uuid('id')->primary(); // UUID sebagai primary key
            $table->uuid('movie_id');      // Kolom untuk ID film
            $table->uuid('cast_id');       // Kolom untuk ID pemeran
            $table->timestamps();          // Menambahkan kolom created_at dan updated_at

            // Menambahkan indeks pada kolom movie_id dan cast_id
            $table->index('movie_id');
            $table->index('cast_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cast_movie');
    }
}
