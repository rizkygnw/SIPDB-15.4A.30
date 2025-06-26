<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{
    public function index()
    {
        $logs = Activity::with('causer')->latest()->paginate(10);
        return view('admin.logs.index', compact('logs'));
    }

    public function destroyAll()
    {
        Activity::truncate(); // atau DB::table('activity_log')->delete();
        return redirect()->back()->with('success', 'Semua log berhasil dihapus.');
    }
}
