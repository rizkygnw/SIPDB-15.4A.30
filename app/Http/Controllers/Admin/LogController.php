<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{
    public function index()
    {
        $logs = Activity::with('causer')->latest()->paginate(10);
        return view('admin.logs.index', compact('logs'));
    }
}
