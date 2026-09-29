<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Mengambil daftar data mahasiswa (private method agar DRY/tidak duplikasi).
     */
    private function getMahasiswaData(): array
    {
        return [
            [
                'nim' => '250441100136',
                'nama' => 'Eko Rismanto',
                'prodi' => 'Sistem Informasi',
                'angkatan' => 2025,
                'status' => 'aktif',
            ],
            [
                'nim' => '250441100112',
                'nama' => 'Vinanda Kristiani Marbun',
                'prodi' => 'Sistem Informasi',
                'angkatan' => 2025,
                'status' => 'aktif',
            ],
            [
                'nim' => '240441100136',
                'nama' => 'Rina Wulandari',
                'prodi' => 'Sistem Informasi',
                'angkatan' => 2024,
                'status' => 'cuti',
            ],
            [
                'nim' => '230441100123',
                'nama' => 'Ahmad Fauzi',
                'prodi' => 'Sistem Informasi',
                'angkatan' => 2023,
                'status' => 'aktif',
            ],
            [
                'nim' => '220441100111',
                'nama' => 'Dewi Lestari',
                'prodi' => 'Sistem Informasi',
                'angkatan' => 2022,
                'status' => 'lulus',
            ],
        ];
    }

    /**
     * Menampilkan profil mahasiswa mandiri.
     */
    public function profil()
    {
        return view('mahasiswa.profil', [
            'nama' => 'Sinta Maharani',
            'nim' => '2410010001',
            'prodi' => 'Sistem Informasi',
            'angkatan' => 2024,
        ]);
    }

    /**
     * Menampilkan daftar seluruh mahasiswa.
     */
    public function index()
    {
        $mahasiswa = $this->getMahasiswaData();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Menampilkan detail mahasiswa berdasarkan NIM.
     */
    public function show($nim)
    {
        $mahasiswa = $this->getMahasiswaData();

        $mhs = collect($mahasiswa)->firstWhere('nim', $nim);

        if (!$mhs) {
            abort(404);
        }

        return view('mahasiswa.show', compact('mhs'));
    }
}