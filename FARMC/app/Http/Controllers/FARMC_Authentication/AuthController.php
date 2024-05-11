<?php

namespace App\Http\Controllers\FARMC_Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\FARMC_Authentication\AuthModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        $messages = [
            'username.required' => 'Username is required',
            'password.required' => 'Password is required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $username = $request->username;
        $password = $request->password;

        $user = DB::table('auth')->where('username', $username)->first();

        if (!$user || !Hash::check($password, $user->password)) {
            // Display SweetAlert for invalid credentials
            return redirect()->back()->withErrors(['message' => 'Invalid credentials'])->withInput();
        }


    // Set session variable indicating successful login
    session(['login_success' => true]);

    // Display SweetAlert on successful login
    return redirect('/dash')->with('success', 'Welcome back!');
    }



    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:auth',
            'password' => 'required',
        ]);

        $user = new AuthModel();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/')->with('success', 'Registration successful. Please login.');
    }

    public function resetPassword(Request $request)
    {
        $rules = [
            'username' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ];

        $messages = [
            'username.required' => 'Username is required.',
            'new_password.required' => 'New password is required.',
            'new_password.min' => 'New password must be at least 8 characters long.',
            'confirm_password.required' => 'Confirm password is required.',
            'confirm_password.same' => 'Confirm password must match the new password.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Fetch the user from the database based on the provided username
        $user = AuthModel::where('username', $request->username)->first();

        if (!$user) {
            return redirect()->back()->with('failed', 'User not found.');
        }

        // Update the user's password
        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect('/')->with('success', 'Password reset successfully.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'You have been logged out.');
    }
}
