<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
        $pass_rule = Password::min(3)
;

        $validated = request()->validate([
            'name' => 'required|min:5|max:255|unique:App\Models\User,name',
            'email' => 'required|min:5|max:255|unique:users,email',
            'password' =>['required', $pass_rule],
            ]);
        $user = User::create($validated);
        auth()->login($user);
        return redirect('/')->with(['success' => 'Congratulation']);
    }
}
