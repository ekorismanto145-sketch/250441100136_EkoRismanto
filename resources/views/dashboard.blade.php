@extends('layouts.app')

@section('judul', 'Dashboard')

@section('konten')
    <h1>Dashboard</h1>

    <div class="grid">
        <x-kartu judul="Total Mahasiswa">
            <strong style="font-size: 2rem">{{ $totalMahasiswa }}</strong>

            <x-slot:footer>
                <a href="{{ route('mahasiswa.index') }}">Lihat daftar</a>
            </x-slot:footer>
        </x-kartu>

        <x-kartu judul="Mahasiswa Aktif">
            <strong style="font-size: 2rem">{{ $totalAktif }}</strong>
        </x-kartu>

        <x-kartu judul="Mahasiswa Cuti">
            <strong style="font-size: 2rem">{{ $totalCuti }}</strong>
        </x-kartu>

        <x-kartu>
            <p>Data pada dashboard ini hanya contoh latihan.</p>
        </x-kartu>
    </div>
@endsection