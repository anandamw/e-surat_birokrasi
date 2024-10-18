<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{



    public function login(Request $request)
    {

        $request->validate(
            [
                "email" => "required|email",
                "password" => "required"
            ],
            [
                "email.required"  => "Email is required.",
                "email.email"     => "Please provide a valid email address.",
                "password.required" => "Password is required.",
                "password.min"      => "Password must be at least 8 characters long."
            ]
        );

        $credentials = $request->only("email", "password");

        if (Auth::attempt($credentials)) {

            $user = Auth::user();


            if ($user->role == "admin") {
                return redirect("/admin/dashboard")->with('success', 'Welcome Admin!');
            } elseif ($user->role == "verifier") {
                return redirect("/verifier/dashboard")->with('success', 'Welcome Verifier!');
            } else {

                Auth::logout();
                return redirect('/login')->with('error', 'Unauthorized access. You do not have the correct role.');
            }
        }


        return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function url()
    {

        if (auth()->user()->role == "admin") {
            return redirect("/admin/dashboard");
        } elseif (auth()->user()->role == "verifier") {
            return redirect("/verifier/dashboard");
        } else {
            return response()->json([
                "status" => false,
            ]);
        }
    }
}
