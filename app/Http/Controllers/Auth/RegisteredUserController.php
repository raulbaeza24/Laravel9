<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function store(Request $request){
         $request->validate([
            'name'=>['required', 'string', 'max:255'],
            'email'=>['required','string', 'email', 'max:255', 'unique:users'],
            'password'=>['required', 'confirmed', Rules\Password::defaults()],
         ]);


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
         ]);

        // Auth::login($user);

        return to_route('login')
        ->with('status', 'CUENTA CREADA EXITOSAMENTE!');
    }
}
