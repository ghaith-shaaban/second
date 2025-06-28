<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class usersController extends Controller
{
    public function showUser(){
        $users=User::orderBy('created_at','asc')->paginate(10);
        return view('admin.users.show',compact(['users']));
    }

    public function editUser(User $user){

        return view('admin.users.edit',compact(['user']));
    }

    public function updateUser(User $user){

        $validated=request()->validate([
            'isAdmin'=>'boolean|required'
        ]);
        
        $user->update($validated);

        return redirect()->route('admin.users.show')->with('success','user has been edited successfully');
    }

    public function deleteUser(User $user){

        $user->delete();
        // Storage::disk('public')->delete($user['image']);
        return redirect()->route('admin.users.show')->with('success','user has been deleted successfully');
    }

    // public function createUser(){

    //     return view('admin.users.create');
    // }

    // public function storeUser(){
    //     $validated=request()->validate([
    //         'image'=>'image|required',
    //         'name'=>'min:2|required',
    //         'dep'=>'min:5|required',
    //         'facebook'=>'min:5|required',
    //         'insta'=>'min:5|required',
    //         'twiter'=>'min:5|required',
    //         'linked_in'=>'min:5|required'
    //     ]);

    //     $imagepath=request()->file('image')->store('assets/imgs/our-team','public');
    //     $validated['image']=$imagepath;

    //     team::create($validated);

    //     return redirect()->route('admin.teams.show')->with('success','new team member has been added successfully');
    // }
}
