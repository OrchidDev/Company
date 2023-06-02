<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public  function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|string|max:225',
           'email' => 'required|string|email|max:225|unique:users',
           'role' => 'required|max:225'
        ]);

        $data = $request->only(['name', 'email', 'role']);
        $data['password'] = Hash::make('password');

        User::create($data);

        $notification = array(
            'message' => 'کاربر جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return redirect()->route('users.index')->with($notification);
    }
}
