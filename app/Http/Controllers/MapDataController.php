<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Node;
use App\Models\Edge;
use App\Models\ParkingLocation;

class MapDataController extends Controller
{
    public function getNodes()
    {
        // Ambil node beserta jadwalnya (schedule)
        // Mengembalikan JSON untuk dikonsumsi JS
        return response()->json(Node::with('schedules')->get());
    }

    public function getEdges()
    {
        return response()->json(Edge::all());
    }

        public function getParking()
    {
        // Ambil lokasi parkir beserta zona-zonanya
        return response()->json(ParkingLocation::with('zones')->get());
    }
}