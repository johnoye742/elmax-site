<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AccountControl extends Controller
{
    //
    public function createAccount(Request $request) {
        $data = $request->validate([
            'name' => 'required|max:500',
            'email' => 'required|email',
            'pwd' => 'required|min:8', // Use 'pwd' here to match your input field name
            'date' => 'required', // Ensure 'date' corresponds to your actual field name
            'address' => 'required'
        ]);

        $user = new User();

        $options = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['pwd'], // Match the field name here
            'dob' => $data['date'], // Ensure 'date' corresponds to your actual field name
            'address' => $data['address']
        ];

        Log::debug($options['name']);

        if ($user->fill($options)->save()) {
            return redirect('/login');
        }

        return 'failed';
    }

    public function login(Request $request) {
        $data = $request -> validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(Auth::attempt($data)) {
            return redirect() -> to('/shop');
        }

        return 'failed xD';
    }
}
