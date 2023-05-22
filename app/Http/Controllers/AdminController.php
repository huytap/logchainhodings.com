<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\StoreRequest;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        return view('admin.index', compact('title'));
    }

    public function login()
    {
        $title = 'Login';
        return view('admin.login', compact('title'));
    }

    public function store(StoreRequest $request)
    {
        if (Auth::guard('web')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'is_admin' => 1
        ], $request->input('remember'))) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error', 'Sai email hoặc mật khẩu');
    }

    public function changepassword()
    {
        $title = 'Change Passowrd';
        return view('admin.changepassword', compact('title'));
    }
    public function updatepassword(Request $request)
    {
        if (strcmp($request->get('confirm_new_password'), $request->get('new_password')) != 0) {
            return redirect()->back()->with("error", "Confirm New Password wrong. Please check again!");
        }

        $validatedData = $request->validate([
            'new_password' => 'required',
            'confirm_new_password' => 'required|same:new_password',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        if ($user->save()) {
            return redirect()->back()->with("success", "Sucessful");
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
