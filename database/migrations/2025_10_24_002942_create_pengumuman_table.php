<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/YYYY_MM_DD_xxxxxx_create_pengumuman_table.php

public function up(): void
{
    Schema::create('pengumuman', function (Blueprint $table) {
        $table->id(); // Kunci utama (ID)
        $table->string('judul'); // Kolom untuk Judul Pengumuman
        $table->text('isi'); // Kolom untuk Isi Pengumuman (text bisa menampung tulisan panjang)
        $table->timestamps(); // Kolom created_at dan updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumuman');
    }
};
