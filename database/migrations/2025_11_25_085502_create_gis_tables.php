<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Tabel Nodes (Titik: Gedung, Gerbang, Simpang)
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['building', 'gate', 'jalan', 'poi']);
            $table->double('lat', 15, 8);
            $table->double('lng', 15, 8);
            $table->timestamps();
        });

        // 2. Tabel Edges (Jalur antar titik)
        Schema::create('edges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('from_node_id')->constrained('nodes')->onDelete('cascade');
            $table->foreignId('to_node_id')->constrained('nodes')->onDelete('cascade');
            $table->double('weight')->nullable(); // Jarak dalam meter
            $table->timestamps();
        });

        // 3. Tabel Jadwal (Khusus Gerbang)
        Schema::create('node_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('node_id')->constrained('nodes')->onDelete('cascade');
            $table->unsignedTinyInteger('day_of_week'); // 0=Minggu, 1=Senin, dst
            $table->time('open_time');
            $table->time('close_time');
            $table->timestamps();
        });

            // --- ✨ BAGIAN BARU: DATA PARKIR ✨ ---
        
        // 1. Lokasi Parkir (Induknya, misal: "Parkir Rektorat")
        Schema::create('parking_locations', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Lokasi
            $table->string('polygon_id')->unique(); // ID unik dari JS lama (misal: 'pa_rektorat')
            $table->double('center_lat', 15, 8); // Titik tengah untuk view peta
            $table->double('center_lng', 15, 8);
            $table->timestamps();
        });

        // 2. Zona Parkir (Area spesifik: Motor/Mobil/Polygon)
        Schema::create('parking_zones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parking_location_id')->constrained('parking_locations')->onDelete('cascade');
            $table->string('sub_id')->nullable(); // misal: 'motor_1'
            $table->string('vehicle_type'); // 'motor', 'mobil', 'campur'
            $table->string('color'); // Warna hex (#00f0ff)
            $table->json('coordinates'); // ✨ Kita simpan array koordinat poligon sebagai JSON
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('node_schedules');
        Schema::dropIfExists('edges');
        Schema::dropIfExists('nodes');
    }
};