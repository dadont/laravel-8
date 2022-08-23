<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);
        return view('index', compact ('users'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(UserRequest $request)
    {
       User::create($request->only(['name', 'email']));
       return redirect()->route('users.index')->withSuccess('Created user '.$request->name);;
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
        return redirect()->route('users.index')->withSuccess('Updating user '.$user->name);
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->withDanger('Deleted user '.$user->name);
    }
}
