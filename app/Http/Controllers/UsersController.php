<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('users.profile', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        //User::create(request()->except('_token'));

        $user = User::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'date_of_birth' => request('date_of_birth'),
            'user_name' => request('user_name')
        ]);

        // Normal way of Insert Profiles table data
        /*Profile::create([
            'profile_pic' => request('profile_pic'),
            'bio' => request('bio'),
            'address' => request('address'),
            'owner_id' => $user->id
        ]);*/

        //profile declared as foreign key in User model
        $user->profile()->create([
            'profile_pic' => request('profile_pic'),
            'bio' => request('bio'),
            'address' => request('address'),
        ]);

        return redirect('/users');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }

    public function update($id)
    {
        $user = User::find($id);

        $user->update([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'date_of_birth' => request('date_of_birth'),
            'user_name' => request('user_name')
        ]);

        $user->profile()->update([
            'profile_pic' => request('profile_pic'),
            'bio' => request('bio'),
            'address' => request('address')
        ]);

        return redirect('/users');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        $user->profile()->delete();

        return back();
    }
}
