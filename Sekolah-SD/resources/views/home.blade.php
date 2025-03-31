@extends('layouts.app')

@section('content')
<style>
    .bg-custom {
    position: relative;
    background: url("{{ asset('background.jpg') }}") no-repeat center center;
    background-size: cover;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    .bg-custom::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Ubah angka 0.5 untuk mengatur tingkat kegelapan */
    }

    .bg-custom > * {
        position: relative;
    }

</style>

<div class="container-fluid bg-custom text-center p-5">
    <h1 class="text-light">Selamat Datang di Sistem Informasi SD Negeri 1 Cahaya Bangsa</h1>
</div>

<div class="container mt-4">
    <h2 class="text-center">Profil Sekolah</h2>
    <p class="lead text-center">
        <strong>Visi:</strong>
        <ol> 
            Menjadi sekolah unggulan yang menghasilkan lulusan berprestasi, berkarakter, dan siap bersaing di tingkat nasional maupun internasional.
        <ol>
    </p>
    <p class="lead">
        <strong>Misi:</strong>
        <ol>
            <li>Menyelenggarakan pendidikan berkualitas berbasis ilmu pengetahuan dan teknologi.</li>
            <li>Membangun karakter siswa yang berakhlak mulia, disiplin, dan bertanggung jawab.</li>
            <li>Mengembangkan potensi siswa dalam bidang akademik dan non-akademik.</li>
            <li>Meningkatkan kerja sama dengan berbagai pihak untuk mendukung kualitas pendidikan.</li>
            <li>Menciptakan lingkungan belajar yang nyaman, aman, dan kondusif.</li>
        </ol>
    </p>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h3>
                        <a href="{{ route('guru.index') }}" class="text-white text-decoration-none">
                            {{ $jumlah_guru }}
                        </a>
                    </h3>
                    <p>Jumlah Guru</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h3>
                        <a href="{{ route('siswa.index') }}" class="text-white text-decoration-none">
                            {{ $jumlah_siswa }}
                        </a>
                    </h3>
                    <p>Jumlah Siswa</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-4">Berita Terbaru</h2>
    <ul class="list-group">
        @if($berita->isEmpty())
            <li class="list-group-item">Belum ada berita.</li>
        @else
            @foreach($berita as $b)
                <li class="list-group-item">
                    @if($b->gambar)
                        <div class="text-center">
                            <img src="{{ asset('storage/' . $b->gambar) }}" class="img-fluid mb-2" alt="{{ $b->judul }}" style="max-height: 200px; width: auto;">
                        </div>
                    @endif
                    <h4>{{ $b->judul }}</h4>
                    <p>{{ Str::limit($b->konten, 100, '...') }}</p>
                    <small class="text-muted">{{ $b->created_at->format('d M Y') }}</small>
                    <br>
                    <a href="{{ route('berita.show', $b->id) }}" class="btn btn-primary btn-sm mt-2">Baca Selengkapnya</a>
                </li>
            @endforeach
        @endif
    </ul>
</div>

<footer class="bg-dark text-white mt-5 py-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <h5>Kontak</h5>
                <p>WhatsApp: <a href="https://wa.me/1234567890" class="text-white">+62 123-456-7890</a></p>
                <p>Email: <a href="mailto:info@sekolahxyz.ac.id" class="text-white">info@sekolahxyz.ac.id</a></p>
            </div>
            <div class="col-md-4">
                <h5>Alamat</h5>
                <p>Jl. Pendidikan No. 123, Kota ABC</p>
            </div>
            <div class="col-md-4">
                <h5>Media Sosial</h5>
                <a href="#" class="text-white me-3">Facebook</a>
                <a href="#" class="text-white me-3">Instagram</a>
                <a href="#" class="text-white">Twitter</a>
            </div>
        </div>
    </div>
</footer>
@endsection
