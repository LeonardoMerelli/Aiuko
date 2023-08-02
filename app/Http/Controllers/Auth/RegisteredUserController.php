<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\EmailRule;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rule;
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
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'genere' => ['required', 'string', 'max:255'],
            'eta' => ['required', 'integer', 'between:6,120'],
            'telefono' => ['required', 'integer', 'digits:10', Rule::unique(User::class)],
            'citta' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', new EmailRule],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'genere' => $request->genere,
            'eta' => $request->eta,
            'telefono' => $request->telefono,
            'citta' => $request->citta,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
