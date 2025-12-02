<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapDataController;

// Endpoint untuk mengambil data peta dari database
Route::get('/nodes', [MapDataController::class, 'getNodes']);
Route::get('/edges', [MapDataController::class, 'getEdges']);
Route::get('/parking', [MapDataController::class, 'getParking']);