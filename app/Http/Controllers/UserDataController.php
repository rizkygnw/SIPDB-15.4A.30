<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDataRequest;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserDataController extends Controller
{
    public function index()
    {
        $users = UserData::all();
        return view('userdata.index', compact('users'));
    }

    public function create()
    {
        return view('userdata.create');
    }

    public function store(UserDataRequest $request)
    {
        UserData::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('userdata.index')->with('success', 'User created successfully.');
    }

    public function edit(UserData $userData)
    {
        return view('userdata.edit', compact('userData'));
    }

    public function update(UserDataRequest $request, UserData $userData)
    {
        $userData->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $userData->password,
            'role' => $request->role,
        ]);

        return redirect()->route('userdata.index')->with('success', 'User updated successfully.');
    }

    public function destroy(UserData $userData)
    {
        $deletedId = $userData->id;

        $userData->delete();

        UserData::where('id', '>', $deletedId)
                ->decrement('id', 1);

        $lastId = UserData::max('id');
        $newAutoIncrement = $lastId + 1;
        DB::statement("ALTER TABLE user_data AUTO_INCREMENT = $newAutoIncrement;");

        return redirect()->route('userdata.index')->with('success', 'User deleted and IDs updated.');
    }

}
