<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function GuzzleHttp\Promise\all;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|min:5',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
        ]);

        // $validated['password'] = bcrypt($validated['password']);
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        // $request->session()->flash('success', 'Berhasil Mendaftar! Silahkan Login');

        return redirect('/login')->with('success', 'Berhasil Mendaftar! Silahkan Login');
    }
}