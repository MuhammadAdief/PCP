<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create(Request $request, $token = null): View
{
    // If a token is provided, validate it
    if ($token) {
        if (! $request->hasValidSignature() || ! $this->validateToken($token)) {
            abort(403, 'Invalid or expired URL.');
        }
    }

    return view('admin.auth.register');
}

protected function validateToken($token)
{
    // Implement token validation logic
    // For example, check if the token exists in the cache or database
    // return Cache::has('register_token_' . $token);
    return true; // Placeholder, replace with actual validation
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($admin));

        Auth::guard('admin')->logout();

        return redirect(route('homee', absolute: false));
    }
}
