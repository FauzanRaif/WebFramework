<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Profile extends Model
{
    use HasFactory, HasUuids;

    // Define the table name
    protected $table = 'profiles';

    // Set the type of the primary key as UUID
    protected $primaryKey = 'id';
    // Disable auto-increment for UUID primary key
    public $incrementing = false;
    protected $keyType = 'string';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'biodata',
        'age',
        'address',
        'avatar',
        'user_id', // Foreign key to the users table
    ];

    // Automatically generate UUID on creation
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($profile) {
            if (empty($profile->id)) {
                $profile->id = Str::uuid(); // Generate UUID automatically
            }
        });
    }

    // Define the relationship with the User model (one-to-one relationship)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
