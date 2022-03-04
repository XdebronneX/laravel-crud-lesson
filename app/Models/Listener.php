<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listener extends Model
{
    use HasFactory;
    protected $fillable = ['listener_name'];
}
