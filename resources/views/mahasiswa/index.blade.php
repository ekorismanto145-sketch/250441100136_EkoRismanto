@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')
    <h1>Daftar Mahasiswa</h1>

    @if (count($mahasiswa) > 0)
        <p>Total: {{ count($mahasiswa) }} mahasiswa</p>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Angkatan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mhs['nim'] }}</td>
                        <td>{{ $mhs['nama'] }}</td>
                        <td>{{ $mhs['angkatan'] }}</td>
                        <td>
                            <span class="badge badge-{{ $mhs['status'] }}">
                                {{ ucfirst($mhs['status']) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('mahasiswa.show', $mhs['nim']) }}">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada data mahasiswa.</p>
    @endif
@endsection