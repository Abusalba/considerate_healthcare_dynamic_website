<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $role = Auth::user()->role;

            if ($role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role === 'user') {
                return redirect()->route('user.dashboard');
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Role not recognized.');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
    public function auth(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            $credentials = $request->only('email', 'password');
            $remember = $request->has('remember');

            if (Auth::attempt($credentials, $remember)) {
                $request->session()->regenerate();

                $user = Auth::user();
                $role = $user->role;

                if ($role === 'admin') {
                    return response()->json([
                        'status' => true,
                        'message' => 'Login successful! Redirecting to dashboard...',
                        'url' => route('admin.dashboard')
                    ]);
                } elseif ($role === 'user') {
                    return response()->json([
                        'status' => true,
                        'message' => 'Login successful! Redirecting to dashboard...',
                        'url' => route('user.dashboard')
                    ]);
                } else {
                    Auth::logout();
                    return response()->json([
                        'status' => false,
                        'message' => 'Role not recognized.'
                    ]);
                }
            }

            return response()->json([
                'status' => false,
                'message' => 'Invalid email or password.'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => false,
                'errors' => $e->errors()
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'An error occurred during login. Please try again.'
            ]);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');
    }
   
}
