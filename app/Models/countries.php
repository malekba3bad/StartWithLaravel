<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class countries extends Model
{
   use HasFactory;
    protected $table = 'countries';
    protected $fillable = ['name', 'created_at', 'updated_at', 'active'];
}
