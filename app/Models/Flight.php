<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    use SoftDeletes;
    protected $table = 'flights';
    protected $fillable = ['name', 'created_at', 'updated_at'];

    public function destinations()
    {
        return $this->hasOne(flight_destination::class);
    }

    public function booking()
    {
        return $this->hasMany(flight_booking::class, 'flight_id');
    }
}
