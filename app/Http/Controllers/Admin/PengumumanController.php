<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman; // Pastikan Model Pengumuman sudah di-import
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; // Import Redirect facade

class PengumumanController extends Controller
{
    /**
     * Menampilkan daftar semua pengumuman.
     */
    public function index()
    {
        // 1. Ambil semua data dari tabel pengumuman, urutkan dari yang terbaru
        $dataPengumuman = Pengumuman::orderBy('created_at', 'desc')->get();

        // 2. Kirim data ke view
        // Perhatikan: view('admin.pengumuman.index')
        return view('admin.pengumuman.index', ['pengumuman' => $dataPengumuman]);
    }

    /**
     * Menampilkan form untuk membuat pengumuman baru.
     */
    public function create()
    {
        // Hanya menampilkan halaman form tambah
        return view('admin.pengumuman.create');
    }

    /**
     * Menyimpan pengumuman baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ], [
            'judul.required' => 'Judul tidak boleh kosong.',
            'isi.required' => 'Isi pengumuman tidak boleh kosong.',
        ]);

        // 2. Buat data baru di database
        Pengumuman::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        // 3. Alihkan kembali ke halaman index dengan pesan sukses
        return Redirect::route('admin.pengumuman.index')->with('success', 'Pengumuman baru berhasil ditambahkan!');
    }

    /**
     * Menampilkan data spesifik (tidak kita gunakan di admin, tapi bagian dari resource).
     */
    public function show(Pengumuman $pengumuman)
    {
        // Biasanya tidak dipakai di panel admin, bisa dikosongkan
        return redirect()->route('admin.pengumuman.index');
    }

    /**
     * Menampilkan form untuk mengedit pengumuman.
     * $pengumuman otomatis diambil oleh Laravel berdasarkan ID di URL.
     */
    public function edit(Pengumuman $pengumuman)
    {
        // Kirim data pengumuman yang spesifik ke view edit
        return view('admin.pengumuman.edit', ['item' => $pengumuman]);
    }

    /**
     * Memperbarui pengumuman yang ada di database.
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        // 1. Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ], [
            'judul.required' => 'Judul tidak boleh kosong.',
            'isi.required' => 'Isi pengumuman tidak boleh kosong.',
        ]);

        // 2. Update data di database
        $pengumuman->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        // 3. Alihkan kembali ke halaman index dengan pesan sukses
        return Redirect::route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui!');
    }

    /**
     * Menghapus pengumuman dari database.
     */
    public function destroy(Pengumuman $pengumuman)
    {
        // 1. Hapus data
        $pengumuman->delete();

        // 2. Alihkan kembali ke halaman index dengan pesan sukses
        return Redirect::route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil dihapus!');
    }
}