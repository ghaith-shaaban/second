<?php

namespace App\Http\Controllers;


use App\Models\project;
use App\Models\service;
use App\Models\team;
use Illuminate\Http\Request;

class pagesController extends Controller
{
   public function main(){

    $services=service::orderBy('created_at','asc')->get();
    $projects=project::orderBy('created_at','asc')->get();
    $teams=team::orderBy('created_at','asc')->get();
    return view('welcome',compact(['services','projects','teams']));

}

   public function service(){
    $services=service::orderBy('created_at','asc')->get();
    return view('services',compact(['services']));
   }

   public function aboutUs(){
    $services=service::orderBy('created_at','asc')->get();
    $teams=team::orderBy('created_at','asc')->get();
    return view('about-us',compact(['services','teams']));
   }

   public function details(){
    return view('service-details');
   }

   public function admin(){
    $services=service::count();
    $projects=project::count();
    $team=team::count();
    return view('admin.admin_dashboard',compact(['services','projects','team']));
}
}



