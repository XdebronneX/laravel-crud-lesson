<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    
    protected $guarded = ['id','image'];

    public function albums() 
    {
        return $this->hasMany('App\Models\Album');
    }

}
