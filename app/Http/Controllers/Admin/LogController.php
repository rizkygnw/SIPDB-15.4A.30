<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $logs = Log::with('user')->latest()->paginate(10);
        return view('admin.logs.index', compact('logs'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.logs.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'activity' => 'required|string|max:500',
        ]);

        Log::create($request->all());
        return redirect()->route('logs.index')->with('success', 'Log created successfully.');
    }

    public function edit(Log $log)
    {
        $users = User::all();
        return view('admin.logs.edit', compact('log', 'users'));
    }

    public function update(Request $request, Log $log)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'activity' => 'required|string|max:500',
        ]);

        $log->update($request->all());
        return redirect()->route('logs.index')->with('success', 'Log updated successfully.');
    }

    public function destroy(Log $log)
    {
        $log->delete();
        return redirect()->route('logs.index')->with('success', 'Log deleted successfully.');
    }
}
