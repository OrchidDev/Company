<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.index', compact('users'));
    }

    public  function create()
    {
        return view('admin.users.create');
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

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|string|email|max:225|unique:users',
            'role' => 'required|max:225'
        ]);

        $user->update(
            $request->only(['name', 'email', 'role'])
        );

        $notification = array(
            'message' => 'کاربر جدید با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return redirect()->route('users.index')->with($notification);
    }

    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'کاربر جدید با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return redirect()->route('users.index')->with($notification);
    }
}
