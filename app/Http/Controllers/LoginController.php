<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'login' => 'required', // Bisa berupa username atau email
            'password' => 'required',
        ]);

        // Cek apakah login adalah email atau username
        $fieldType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::guard('admin')->attempt([$fieldType => $credentials['login'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            // dd(Auth::guard('admin')->check());
            // dd(Auth::guard('admin')->user());
            // return redirect()->route('dashboard');

            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'login' => 'Login gagal, periksa kembali username/email dan password.',
        ])->onlyInput('login');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
