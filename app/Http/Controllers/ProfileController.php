<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {
        return view('profile', [
            'user' => $request->user()->load('passenger'),
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile-update', [
            'user' => $request->user()->load('passenger'),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users,email,' . $request->user()->id],
            'password' => ['nullable', 'confirmed', Password::defaults()],
            'gender' => ['nullable', 'string'],
            'telephone' =>  ['nullable', 'numeric', 'regex:/^(\62|0*)[2-9]{1}[0-9]{5,20}$/']
        ], [
            'telephone.regex' => "The phone number must start with 62/0"
        ]);

        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $request->user()->update($data);
        $request->user()->passenger()->update([
            'telephone' => $data['telephone'],
            'gender' => $data['gender'],
        ]);

        return redirect(route('profile'))->with('status', 'profile-updated');
    }
}
