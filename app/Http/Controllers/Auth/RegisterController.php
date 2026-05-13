<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * Tampilkan halaman form registrasi.
     */
    public function showForm(): View
    {
        return view('auth.register');
    }

    /**
     * Proses data registrasi yang dikirim.
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('register.success');
    }

    /**
     * Tampilkan halaman sukses setelah registrasi.
     */
    public function success(): View
    {
        // Pastikan hanya user yang baru login yang bisa akses
        if (! Auth::check()) {
            return redirect()->route('register');
        }

        return view('auth.register-success');
    }
}
