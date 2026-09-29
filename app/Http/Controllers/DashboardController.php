<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard beserta ringkasan statistik.
     */
    public function index()
    {
        return view('dashboard', [
            'totalMahasiswa' => 5,
            'totalAktif' => 3,
            'totalCuti' => 1,
        ]);
    }
}