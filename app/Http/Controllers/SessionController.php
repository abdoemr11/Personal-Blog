<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationData;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    /**
     * @throws ValidationException
     */
    public function store()
    {
        //validate
        $validated = \request()->validate([
            'email' => ['required'],
            'password' => 'required'
        ]);

        if (!auth()->attempt($validated))
        {
            throw ValidationException::withMessages(['email' => 'your credential is not correct']);
        }
        return redirect('/')->with(['success' => 'We missed you ' . Auth::user()->name]);

    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Good bye');
    }
}
