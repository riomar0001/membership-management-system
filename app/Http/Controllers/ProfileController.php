<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    /**
     * Show the user profile page.
     *
     * @return \Illuminate\View\View
     */
    public function editProfile()
    {
        $user = Auth::user();
        return view('pages.admin.account-settings.profile', compact('user'));
    }

    public function editPassword()
    {
        $user = Auth::user();
        return view('pages.admin.account-settings.edit-password', compact('user'));
    }

    /**
     * Update the user's profile information.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;

        // Fetch the user directly from DB to get the correct ID format
        $dbUser = DB::table('users')
            ->where('umindanao_email', $user->umindanao_email)
            ->first();

        if (!$dbUser) {
            return redirect()->route('admin.profile')->with('error', 'User not found.');
        }

        // Handle UUID properly by casting to string if needed
        $userId = $dbUser->id;

        // Custom validation for email uniqueness
        $emailExists = DB::table('users')
            ->where('umindanao_email', $request->umindanao_email)
            ->where('id', '!=', $userId)
            ->exists();

        if ($emailExists) {
            return redirect()->back()->withErrors([
                'umindanao_email' => 'This email address is already taken.'
            ])->withInput();
        }

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'umindanao_email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'umindanao_email' => $request->umindanao_email,
            'updated_at' => now(),
        ];

        DB::table('users')->where('id', $userId)->update($data);

        return redirect()->route('admin.profile.updateProfile')->with('success', 'Profile updated successfully.');
    }

    /**
     * Update the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => [
                'required',
                function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('The current password is incorrect.');
                    }
                }
            ],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        // Fetch the user directly from DB to get the correct ID format
        $dbUser = DB::table('users')
            ->where('umindanao_email', $user->umindanao_email)
            ->first();

        if (!$dbUser) {
            return redirect()->route('admin.profile.updatePassword')->with('error', 'User not found.');
        }

        DB::table('users')->where('id', $dbUser->id)->update([
            'password' => Hash::make($request->new_password),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.profile.updatePassword')->with('success', 'Password updated successfully.');
    }
}
