<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDataRequest;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $fileName = time() . '.' . $request->photo->getClientOriginalExtension();
            $filePath = $request->photo->storeAs('uploads/photos', $fileName, 'public');
            $data['photo'] = $filePath; // Simpan path file ke dalam data
        } else {
            $data['photo'] = null; // Atur null jika tidak ada foto
        }

        UserData::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'photo' => $data['photo'],
        ]);

        return redirect()->route('userdata.index')->with('success', 'User created successfully.');
    }

    public function edit(UserData $userData)
    {
        return view('userdata.edit', compact('userData'));
    }

    public function update(UserDataRequest $request, UserData $userData)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($userData->photo) {
                Storage::disk('public')->delete($userData->photo);
            }

            // Simpan foto baru
            $fileName = time() . '.' . $request->photo->getClientOriginalExtension();
            $filePath = $request->photo->storeAs('uploads/photos', $fileName, 'public');
            $data['photo'] = $filePath; // Simpan path foto baru
        } else {
            $data['photo'] = $userData->photo; // Pertahankan foto lama jika tidak ada yang diunggah
        }

        $userData->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $userData->password,
            'role' => $request->role,
            'photo' => $data['photo'],
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

    public function foto($id)
    {
        // Ambil data pengguna berdasarkan ID
        $user = UserData::findOrFail($id);

        // Jika foto ada, tampilkan
        if ($user->photo) {
            return response()->file(storage_path('app/public/' . $user->photo));
        }

        // Jika tidak ada foto, tampilkan default
        return response()->file(public_path('images/default-photo.jpg'));
    }
}
