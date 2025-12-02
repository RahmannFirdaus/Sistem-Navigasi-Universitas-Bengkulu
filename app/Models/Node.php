<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $guarded = [];

    // Relasi ke jadwal
    public function schedules()
    {
        return $this->hasMany(NodeSchedule::class);
    }
}