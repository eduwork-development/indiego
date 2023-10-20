<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // Display the admin login form
    public function loginForm()
    {
        return view('login');
    }

    public function resetForm()
    {
        return view('reset');
    }

    // Handle the admin login
    public function login(Request $request)
    {
        $loginData = $request->all();
        if(User::where('email', '=', $loginData['email'])->first()){
            $user = User::where('email' , '=', $loginData['email'])->first();
           
            if(Hash::check($loginData['password'], $user['password'])){
                $token = Str::random(80);
    
                $user->remember_token = hash('sha256', $token);
                $user->save();
    
                return redirect()->route('konseling.index');
            }else {
                
                return redirect()->route('admin.login')->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Invalid login credentials']);
            }
        }
    }  
    
    public function store(Request $request)
    {
       
        $storeData=$request->all();
        $validate=Validator::make($storeData,[
            'name'=>'required|max:60|unique:users',
            'email'=>'required|max:60',
            'password'=>'required',
           
        ]);

        if($validate->fails())
        return response()->json($validate->errors(), 400);
        
        $storeData['password'] = Hash::make($request->password);
            $user=User::create($storeData);
            
            // $user=User::create($storeData);
            return response([
                'message'=>'add user success',
                'data'=>$user
            ],200);
    }

    public function ubahPassword(Request $request){
        $resetPW = $request->all();
        if(User::where('email', '=', $resetPW['email'])->first()){
            $user = User::where('email' , '=', $resetPW['email'])->first();
        }else{
            return redirect()->route('admin.login')->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Email not found']);
        }
        
        $validator = Validator::make($request->all(), [
            'password' => 'required|string',
        ]);
        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
                'data' => null
            ], 400);
        }
        
            $user->password = bcrypt($request->password);
            if($user->save()){
                return redirect()->route('admin.login')->withInput($request->only('email', 'remember'));
            }else{
                return redirect()->route('admin.login')->withInput($request->only('email', 'remember'));
            }
        
    }
}
