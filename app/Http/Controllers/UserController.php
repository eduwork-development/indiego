<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // Display the admin login form
    public function loginForm()
    {
        return view('login');
    }

    // Handle the admin login
    public function login(Request $request)
    {
        $loginData = $request->all();
        if(User::where('email', '=', $loginData['email'])->first()){
            $user = User::where('email' , '=', $loginData['email'])->first();
           
            if($user['password'] === $loginData['password']){
                $token = Str::random(80);
    
                $user->remember_token = hash('sha256', $token);
                $user->save();
    
                return redirect()->route('konseling.index');
            }else {
                
                return redirect()->route('admin.login')->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Invalid login credentials']);
            }
        }
    }   
}
