@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Siswa</h2>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswas as $key => $siswa)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->email }}</td>
                    <td>{{ $siswa->telepon }}</td>
                    <td>{{ $siswa->kelas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
