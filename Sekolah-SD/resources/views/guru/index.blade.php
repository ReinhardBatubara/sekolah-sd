@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Guru</h2>
    <a href="{{ route('guru.create') }}" class="btn btn-primary">Tambah Guru</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gurus as $key => $guru)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $guru->nama }}</td>
                    <td>{{ $guru->nip }}</td>
                    <td>{{ $guru->email }}</td>
                    <td>{{ $guru->telepon }}</td>
                    <td>{{ $guru->mapel }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
