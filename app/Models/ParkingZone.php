<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ParkingZone extends Model
{
    protected $guarded = [];

    // Pastikan kolom coordinates otomatis diubah jadi Array saat diambil
    protected $casts = [
        'coordinates' => 'array',
    ];
}