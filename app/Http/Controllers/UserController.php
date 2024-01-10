<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Users::all();
        return view('user.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:5|confirmed',
        ]);

        Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Users::find($id);
        return view('user.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Users::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:5|confirmed',
            'old_password' => 'required_with:password|string|min:5',
        ]);

        // Check if the old password matches
        if ($request->filled('old_password') && !Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'Password lama tidak cocok.'])->withInput();
        }
        if ($request->filled('password')) {
            // Check if the new password matches the confirmation
            if ($request->password !== $request->password_confirmation) {
                return redirect()->back()->withErrors(['password_confirmation' => 'Konfirmasi password baru tidak cocok.'])->withInput();
            }

            $user->password = bcrypt($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;

        // Check if a new password is provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Users::findOrFail($id);

        $row->delete();

        return redirect('user');
    }
}