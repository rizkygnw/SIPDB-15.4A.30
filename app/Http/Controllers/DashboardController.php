<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $statuses = [
            'Pendaftaran',
            'Seleksi',
            'Tes Minat Bakat',
            'Registrasi Ulang',
            'Diterima',
            'Ditolak',
        ];

        // Hitung jumlah berdasarkan status
        $data = [];
        foreach ($statuses as $status) {
            $data[$status] = DB::table('students')->where('status', $status)->count();
        }

        return view('admin.dashboard', ['data' => $data]);
    }
}
