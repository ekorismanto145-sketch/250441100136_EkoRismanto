@extends('layouts.app')

@section('judul', 'Detail Mahasiswa')

@section('konten')
    <h1>Detail Mahasiswa</h1>

    <table>
        <tr>
            <th>NIM</th>
            <td>{{ $mhs['nim'] }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $mhs['nama'] }}</td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td>{{ $mhs['prodi'] }}</td>
        </tr>
        <tr>
            <th>Angkatan</th>
            <td>{{ $mhs['angkatan'] }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ ucfirst($mhs['status']) }}</td>
        </tr>
    </table>

    <p><a href="{{ route('mahasiswa.index') }}">&larr; Kembali ke daftar</a></p>
@endsection