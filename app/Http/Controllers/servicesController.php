<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class servicesController extends Controller
{
    public function showService(){
        $services=service::orderBy('created_at','asc')->paginate(10);
        return view('admin.services.show',compact(['services']));
    }

    public function createService(){
        $teams=team::all();
        return view('admin.services.create',compact(['teams']));
    }

    public function storeService(){
        $validated=request()->validate([
            'image'=>'image|required',
            'title'=>'min:2|required',
            'details'=>'min:5|required'
        ]);

        $validated2=request()->validate([
            'team_id' => 'required|array|min:1',
            'team_id.*' => 'integer|exists:teams,id',//validate each workers id.
        ]);

        $imagepath=request()->file('image')->store('assets/imgs/what-we-do','public');
        $validated['image']=$imagepath;

        $service=service::create($validated);

        $service->teams()->sync($validated2['team_id']);

        return redirect()->route('admin.services.show')->with('success','new service has been added successfully');
    }

    public function editService(service $service){
        $teams=team::all();
        return view('admin.services.edit',compact(['service','teams']));
    }

    public function updateService(service $service){

        $validated=request()->validate([
            'image'=>'image|required',
            'title'=>'min:2|required',
            'details'=>'min:5|required',
        ]);
            $validated2=request()->validate([
            'team_id' => 'required|array|min:1',
            'team_id.*' => 'integer|exists:teams,id',//validate each workers id.
        ]);

        $imagepath=request()->file('image')->store('assets/imgs/what-we-do','public');
        $validated['image']=$imagepath;
        // 'storage/'.
        if($service['image']!=null){
            Storage::disk('public')->delete($service['image']);
        }

        $service->update($validated);

        $service->teams()->sync($validated2['team_id']);



        return redirect()->route('admin.services.show')->with('success',' service has been edited successfully');
    }

    public function deleteService(service $service){

        $service->delete();
        Storage::disk('public')->delete($service['image']);
        return redirect()->route('admin.services.show')->with('success','service has been deleted successfully');
    }
}
