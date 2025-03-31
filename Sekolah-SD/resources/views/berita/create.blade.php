@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center text-primary">Tambah Berita</h2>

    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="mb-3">
            <label for="konten" class="form-label">Isi Berita</label>
            <textarea class="form-control" id="konten" name="konten" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Unggah Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
