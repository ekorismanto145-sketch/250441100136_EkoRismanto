@extends('layouts.app')

@section('judul', 'Profil Mahasiswa')

@section('konten')
    <h1>Profil Mahasiswa</h1>

    <table>
        <tr>
            <th>Nama</th>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <th>NIM</th>
            <td>{{ $nim }}</td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td>{{ $prodi }}</td>
        </tr>
        <tr>
            <th>Angkatan</th>
            <td>{{ $angkatan }}</td>
        </tr>
    </table>

    <p>Selamat datang, {{ $nama }}!</p>
@endsection