@extends('admin.layout')

@section('title', 'Manajemen Pengumuman')

@section('content')
    <div class="welcome-banner">
        <h2>Manajemen Pengumuman</h2>
        <p>Kelola pengumuman yang akan dilihat oleh semua pengguna.</p>
    </div>

    @if (session('success'))
        <div class="alert alert-success" style="animation: none; opacity: 1; transform: none; margin-bottom: 1.5rem;">
            {{ session('success') }}
        </div>
    @endif

    <div class="content-section">
        <div class="table-header">
            <h3>Daftar Pengumuman</h3>
            <a href="{{ route('admin.pengumuman.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Pengumuman</a>
        </div>
        <div class="table-responsive">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Pengumuman</th>
                        <th>Isi</th>
                        <th>Tanggal Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pengumuman as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($item->isi, 50) }}</td> 
                        <td>{{ $item->created_at->format('d M Y') }}</td>
                        <td style="display: flex; gap: 5px;">
                            <a href="{{ route('admin.pengumuman.edit', $item->id) }}" class="btn-icon btn-edit" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.pengumuman.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengumuman ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-icon btn-delete" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="text-align: center;">Tidak ada data pengumuman.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection