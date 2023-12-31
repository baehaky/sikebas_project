<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Saldo;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {   

        // dd($request);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'no_telp' => ['required', 'string', 'min:10', 'unique:'.User::class]
            // 'tempatLahir' => ['required', 'string'],
            // 'tanggalLahir' => ['required', 'date'],
            // 'jenisKelamin' => ['required', 'string'],
            // 'alamat' => ['required', 'string']
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'tempatLahir' => $request->tempatLahir,
            // 'tanggalLahir' => $request->tanggalLahir,
            // 'jenisKelamin' => $request->jenisKelamin,
            'no_telp' => $request->no_telp
            // 'alamat' => $request->alamat
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('admin.dashboard');
    }
}
