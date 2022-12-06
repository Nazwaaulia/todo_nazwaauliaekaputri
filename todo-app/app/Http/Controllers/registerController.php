<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request){
        $validateData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/')->with('successRegister', 'Berhasil menambahkan akun, silahkan login!');
    }
}