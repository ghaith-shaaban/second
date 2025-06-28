<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'dep',
        'image',
        'facebook',
        'insta',
        'twiter',
        'linked_in'
    ];

    public function projects(){
        return $this->hasMany(project::class,'team_id','id');
    }

    public function services(){
        return $this->belongsToMany(service::class,'service_team','team_id','service_id')->withTimestamps();
    }
}
