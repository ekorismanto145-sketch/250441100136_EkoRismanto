@extends('layouts.app')

@section('judul', 'Beranda')

@section('konten')
    <h1>Sistem Informasi Mahasiswa</h1>
    <p>Selamat datang di aplikasi latihan Laravel Modul 1.</p>
    <p><a href="{{ route('mahasiswa.index') }}">Lihat daftar mahasiswa &rarr;</a></p>
@endsection