<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    //protected $fillable = ['title','artist','genre','year'];

    protected $fillable = ['album_name','artist_id', 'img_path'];

    public function artist() 
    {
        return $this->belongsTo('App\Models\Artist');
    }

    public function listeners()
    {
        return $this->belongsToMany('App\Models\Listener');
    }

}
