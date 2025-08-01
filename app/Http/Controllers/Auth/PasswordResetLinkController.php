<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle a password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
        ]);

        // We have disabled the password reset feature for security reasons.
        // You can re-enable it by uncommenting the following lines.

        // $status = Password::sendResetLink(
        //     $request->only('email')
        // );

        // if ($status !== Password::RESET_LINK_SENT) {
        //     throw ValidationException::withMessages([
        //         'email' => [trans($status)],
        //     ]);
        // }

        // return back()->with('status', __($status));

        return back()->with('status', 'Password reset feature is currently disabled.');
    }
}