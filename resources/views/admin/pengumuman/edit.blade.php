@extends('admin.layout')

@section('title', 'Edit Pengumuman')

@section('content')
    <div class="welcome-banner">
        <h2>Edit Pengumuman</h2>
        <p>Perbarui detail untuk pengumuman: <strong>{{ $item->judul }}</strong></p>
    </div>

    <div class="content-section">
        @if ($errors->any())
            <div class="alert alert-danger" style="animation: none; opacity: 1; transform: none; margin-bottom: 1.5rem;">
                <strong>Oops! Terjadi kesalahan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.pengumuman.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Method untuk update --}}
            
            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="judul" style="font-weight: 600; font-size: 1rem; color: var(--text-dark); margin-bottom: 8px; display: block;">Judul</label>
                <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul', $item->judul) }}" required>
            </div>

            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label for="isi" style="font-weight: 600; font-size: 1rem; color: var(--text-dark); margin-bottom: 8px; display: block;">Isi Pengumuman</label>
                <textarea id="isi" name="isi" class="form-control" rows="8" required>{{ old('isi', $item->isi) }}</textarea>
            </div>

            <div style="display: flex; gap: 10px;">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Perbarui</button>
                <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection