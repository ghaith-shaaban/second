<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class projectsController extends Controller
{

    public function showProject(){
        $projects=project::orderBy('created_at','asc')->paginate(10);
        return view('admin.projects.show',compact(['projects']));
    }

    public function createProject(){
        $teams=team::all();
        return view('admin.projects.create',compact(['teams']));
    }

    public function storeProject(){
        $validated=request()->validate([
            'image'=>'image|required',
            'title'=>'min:2|required',
            'text'=>'min:5|required',
            'team_id'=>'required|exists:teams,id'
        ]);

        $imagepath=request()->file('image')->store('assets/imgs/latest-project','public');
        $validated['image']=$imagepath;

        project::create($validated);

        return redirect()->route('admin.projects.show')->with('success','new project has been added successfully');
    }

    public function editProject(project $project){
        $teams=team::all();
        return view('admin.projects.edit',compact(['project','teams']));
    }

    public function updateProject(project $project){

        $validated=request()->validate([
            'image'=>'image|required',
            'title'=>'min:2|required',
            'text'=>'min:5|required',
            'team_id'=>'required|exists:teams,id'
        ]);

        $imagepath=request()->file('image')->store('assets/imgs/latest-project','public');
        $validated['image']=$imagepath;
        // 'storage/'.
        if($project['image']!=null){
            Storage::disk('public')->delete($project['image']);
        }

        $project->update($validated);



        return redirect()->route('admin.projects.show')->with('success','project has been edited successfully');
    }

    public function deleteProject(project $project){

        $project->delete();
        Storage::disk('public')->delete($project['image']);
        return redirect()->route('admin.projects.show')->with('success','project has been deleted successfully');
    }

}
