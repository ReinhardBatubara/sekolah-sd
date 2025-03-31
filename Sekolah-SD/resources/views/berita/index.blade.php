@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center text-primary">Daftar Berita</h2>
    
    <a href="{{ route('berita.create') }}" class="btn btn-success mb-3">Tambah Berita</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <ul class="list-group">
        @forelse($berita as $b)
            <li class="list-group-item">
                <h4>{{ $b->judul }}</h4>
                <p>{{ $b->konten }}</p>
                <small class="text-muted">Diterbitkan pada: {{ $b->created_at->format('d M Y') }}</small>
            </li>
        @empty
            <li class="list-group-item">Belum ada berita.</li>
        @endforelse
    </ul>
</div>
@endsection
