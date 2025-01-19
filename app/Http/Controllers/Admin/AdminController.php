<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // Mengambil data statistik dari database, misalnya jumlah pendaftar, pembayaran, dll.
        $totalPendaftar = DB::table('students')->count();
        $diterima = DB::table('students')->where('status', 'Diterima')->count();
        $ditolak = DB::table('students')->where('status', 'Ditolak')->count();
        $seleksi = DB::table('students')->where('status', 'Seleksi')->count();
        $tes = DB::table('students')->where('status', 'Tes Minat Bakat')->count();
        $registrasi = DB::table('students')->where('status', 'Registrasi Ulang')->count();
        $pending = DB::table('students')->where('status', 'Pendaftaran')->count();

        // Kirim data ke view
        return view('admin.dashboard', [
            'totalPendaftar' => $totalPendaftar,
            'diterima' => $diterima,
            'ditolak' => $ditolak,
            'seleksi' => $seleksi,
            'tes' => $tes,
            'registrasi' => $registrasi,
            'pending' => $pending,
        ]);
    }
}
