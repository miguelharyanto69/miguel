<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthenticationController extends Controller {
    public function login(Request $request) {
        $validate = $request->validate([
            'email'=>['required'],
            'password'=>['required' , 'min:8']
        ]);

        if(Auth::attempt($validate)) {
            return redirect()->route('welcome');
        }

        return back()->withErrors(['message'=>'Authentication failed']);
    }

    public function register(Request $request) {
        $validate = $request->validate([
            'email'=>['required' , 'unique:users'],
            'username'=>['required' , 'min:8'],
            'password'=>['required' , 'min:8'],
            'confirm'=>['required' , 'same:password']
        ]);

        $create = User::create([
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>Hash::make($request->password)
        ]);

        if($create) {
             return redirect()->route('auth.login.view');
        }

        return back()->withErrors(['message'=>'Failed create an account']);
    }

    public function showLogin(){
       if(Auth::check()){
        return redirect()->route('welcome');
        
       }

        return view('auth.login');
    }

    public function showRegister() {
       if(Auth::check()){
        return redirect()->route('welcome');
        
       }

        return view('auth.register');
    }
}