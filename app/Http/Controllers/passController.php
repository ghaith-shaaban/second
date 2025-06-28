<?php

namespace App\Http\Controllers;

use App\Mail\resetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class passController extends Controller
{
    public function index(){
        return view('auth.pass.index');
    }

    public function changeShow(){
        return view('auth.pass.change');
    }

    public function change(Request $request){

        $validated=$request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required',
        ]);

        $validated2=$request->validate([
            'newPassword'=>'confirmed|required'
        ]);

        if(auth()-> attempt($validated))
            {
                request()->session()->regenerate();
                $user=auth()->user();
                $newPassword=["password"=>Hash::make($validated2['newPassword'])];
                //changing the name in validated2 so it can be updated in database

                $user->update($newPassword);

                if(auth()->user()->isAdmin)
                {
                    return redirect()->route("admin.dashboard")->with('success','password has been edited successfully');
                }
                else
                {
                    return redirect()->route("change.show")->with('success','password has been edited successfully');
                }
            }
        else{
                return redirect()->route("change.show")->with('success','password has NOT been edited !');
            }
    }

    public function resetShow(){
        return view('auth.pass.reset');
    }

    public function reset(Request $request){

        // session()->get('variable');
        // session()->put('variable', $variable);

        $validated=$request->validate([
            'email'=>'required|email|exists:users,email']);
        session()->put('email', $validated['email']);

        $code=rand(100000,999999);
        session()->put('code', $code);

        Mail::to($validated['email'])->send(new resetPassword($code));

        return redirect()->route("code.show")->with('success','we send code verification to your email !');
    }

    public function codeShow(){
        return view('auth.pass.verification');
    }

    public function code(Request $request){

        $validated=$request->validate([
            'code'=>'required|numeric'
        ]);

        if(session()->has('code') && session()->has('email'))
        {
            $code=session()->get('code');

            if($code==$validated['code'])
            {
            return redirect()->route("set.show")->with('success','the code you entered is correct ! reset your password');
            }
            else
            {
            return redirect()->route("code.show")->with('success','the code you entered is not correct !');
            }
        }
        else
        {
            return redirect()->route("code.show")->with('success','not authorized !');
        }
    }

    public function setShow(){
        return view('auth.pass.set');
    }

    public function set(Request $request){

        if(session()->has('code') && session()->has('email'))
        {
            $email=session()->get('email');

            $validated=$request->validate([
                'newPassword'=>'confirmed|required'
            ]);

            $user=User::where('email',$email)->firstorFail();

            $newPassword=["password"=>Hash::make($validated['newPassword'])];
                //changing the name in validated2 so it can be updated in database

                $user->update($newPassword);

            if($user->isAdmin)
            {
                return redirect()->route("show.login")->with('success','password has been edited successfully');
            }
            else
            {
                return redirect()->route("main")->with('success','password has been edited successfully');
            }
        }
        else
        {
            return redirect()->route("code.show")->with('success','not authorized !');
        }

    }
}
