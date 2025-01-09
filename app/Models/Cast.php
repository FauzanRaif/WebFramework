<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
  use HasFactory, HasUuids;

  // Define the table name (optional, if different from the plural form of the model name)
  public $incrementing = false;

  // Define the primary key (optional, if it's not the default 'id')
  protected $table = 'casts';

  // Disable the auto-incrementing feature (since we're using UUID)
  protected $primaryKey = 'id';

  // Define the type of the primary key (UUID)
  protected $keyType = 'string';

  // Define the fillable attributes
  protected $fillable = [
    'name',
    'age',
    'biodata',
    'avatar',
  ];

  protected $dates = [
    'created_at',
    'updated_at',
  ];
}
