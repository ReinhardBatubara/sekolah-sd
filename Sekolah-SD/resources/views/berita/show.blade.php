@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-primary">{{ $berita->judul }}</h1>
    <p class="text-muted">{{ $berita->created_at->format('d M Y') }}</p>

    @if($berita->gambar)
        <img src="{{ Storage::url($berita->gambar) }}" class="img-fluid mb-3" alt="{{ $berita->judul }}" style="max-height: 300px;">
    @endif

    <p>{{ $berita->konten }}</p>

    <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
