<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'text',
        'team_id',
    ];

   public function teams(){
    return $this->belongsTo(team::class,'team_id','id');
   }
}
