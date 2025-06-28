<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class teamsController extends Controller
{
     public function showTeam(){
        $teams=team::orderBy('created_at','asc')->paginate(10);
        return view('admin.teams.show',compact(['teams']));
    }

    public function createTeam(){

        return view('admin.teams.create');
    }

    public function storeTeam(){
        $validated=request()->validate([
            'image'=>'image|required',
            'name'=>'min:2|required',
            'dep'=>'min:5|required',
            'facebook'=>'min:5|required',
            'insta'=>'min:5|required',
            'twiter'=>'min:5|required',
            'linked_in'=>'min:5|required'
        ]);

        $imagepath=request()->file('image')->store('assets/imgs/our-team','public');
        $validated['image']=$imagepath;

        team::create($validated);

        return redirect()->route('admin.teams.show')->with('success','new team member has been added successfully');
    }

    public function editTeam(team $team){

        return view('admin.teams.edit',compact(['team']));
    }

    public function updateTeam(team $team){

        $validated=request()->validate([
            'image'=>'image|required',
            'name'=>'min:2|required',
            'dep'=>'min:5|required',
            'facebook'=>'min:5|required',
            'insta'=>'min:5|required',
            'twiter'=>'min:5|required',
            'linked_in'=>'min:5|required'
        ]);

        $imagepath=request()->file('image')->store('assets/imgs/our-team','public');
        $validated['image']=$imagepath;
        // 'storage/'.
        if($team['image']!=null){
            Storage::disk('public')->delete($team['image']);
        }

        $team->update($validated);



        return redirect()->route('admin.teams.show')->with('success','team member has been edited successfully');
    }

    public function deleteTeam(team $team){

        $team->delete();
        Storage::disk('public')->delete($team['image']);
        return redirect()->route('admin.teams.show')->with('success','team member has been deleted successfully');
    }

}
