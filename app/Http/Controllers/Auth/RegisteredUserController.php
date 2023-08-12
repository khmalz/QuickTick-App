<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Passenger;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'gender' => ['required', 'string'],
            'telephone' =>  ['required', 'numeric', 'regex:/^(\62|0*)[2-9]{1}[0-9]{5,20}$/']
        ], [
            'telephone.regex' => "The phone number must start with 62/0"
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Passenger::create([
            'user_id' => $user->id,
            'telephone' => $request->telephone,
            'gender' => $request->gender,
        ]);

        $user->assignRole('Penumpang');

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home'));
    }
}
