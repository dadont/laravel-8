<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::get();
        return view('index', compact ('users'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(UserRequest $request)
    {
       User::create($request->only(['name', 'email']));
       return redirect()->route('users.index');
    }


    public function show(User $user)
    {
        return view('show', compact ('user'));
    }


    public function edit(User $user)
    {
        return view('form', compact ('user'));
    }


    public function update(UserRequest $request, User $user)
    {
        $user->update($request->only(['name', 'email']));
        return redirect()->route('users.index');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
