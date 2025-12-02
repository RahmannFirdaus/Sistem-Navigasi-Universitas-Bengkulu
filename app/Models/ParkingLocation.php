<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ParkingLocation extends Model
{
    protected $guarded = [];

    // Relasi ke zona-zona parkir di dalamnya
    public function zones()
    {
        return $this->hasMany(ParkingZone::class);
    }
}