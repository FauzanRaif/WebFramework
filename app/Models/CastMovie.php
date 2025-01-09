<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CastMovie extends Model
{
    use HasFactory, HasUuids;

    // Tidak perlu mendefinisikan created_at dan updated_at jika Anda ingin mereka otomatis dikelola oleh Eloquent
    // Jika Anda menggunakan timestamps, pastikan property berikut tidak ada dalam model:
    // public $timestamps = false;  // Jangan gunakan ini jika Anda ingin Laravel mengelola timestamps

    protected $fillable = [
        'movie_id',
        'cast_id',
    ];
}
