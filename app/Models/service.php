<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'details',
    ];

    public function teams(){
        return $this->belongsToMany(team::class,'service_team','service_id','team_id')->withTimestamps();
    }
}
