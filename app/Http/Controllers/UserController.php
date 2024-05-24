<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $student = Student::where('username', $credentials['username'])
                          ->where('password', $credentials['password'])
                          ->first();

        if ($student) {
            session(['student' => $student->id]);
            return redirect()->route('user.dashboard');
        }

        return back()->withErrors(['credentials' => 'Invalid credentials']);
    }

    public function logout()
    {
        session()->forget('student');
        return redirect()->route('welcome');
    }

    public function dashboard()
    {
        $studentId = session('student');
        if (!$studentId) {
            return redirect()->route('user.login');
        }

        $student = Student::findOrFail($studentId);

        return view('user.dashboard', ['student' => $student]);
    }

    public function timeIn(Request $request)
    {
        $studentId = session('student');
        if (!$studentId) {
            return redirect()->route('user.login');
        }

        $student = Student::findOrFail($studentId);
        $student->time_in = now();
        $student->time_out = null; 
        $student->save();

        return redirect()->route('welcome');
    }

    public function timeOut(Request $request)
    {
        $studentId = Session::get('student');
        if (!$studentId) {
            return redirect()->route('user.login');
        }

        $student = Student::findOrFail($studentId);
        if ($student->time_in && !$student->time_out) {
            $student->time_out = now();
            $student->save();
        }

        return redirect()->route('welcome');
    }
}
