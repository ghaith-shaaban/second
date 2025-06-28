<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
  public function showLogin(){
    return view('auth.login');
  }

  public function showRegister(){
    return view('auth.register');
  }

  public function login(Request $request){
    $validated=$request->validate([
        'email'=>'required|email',
        'password'=>'required'
    ]);

    if(auth()-> attempt($validated))
    {
        request()->session()->regenerate();
        
        if(auth()->user()->isAdmin)
        {return redirect()->route("admin.dashboard");}
        else
        {return redirect()->route("main");}
    }
    else{
        return redirect()->route("show.login");

    }
  }

  public function register(Request $request){
    $validated=$request->validate([
        'name'=>'required|min:2|max:255|string',
        'email'=>'required|email|unique:users,email',
        'password'=>'confirmed|required'
    ]);

    $validated['password']= Hash::make($validated['password']);
    User::create($validated);

    // if(auth()-> attempt($validated))
    return redirect()->route("admin.dashboard")->with('success','account create successfully');
  }

  public function logout(){
 auth()->logout();
 request()->session()->invalidate();
 request()->session()->regenerateToken();

 return redirect()->route("main")->with('success','logout done successfully');

  }
}
