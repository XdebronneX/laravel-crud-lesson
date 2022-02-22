<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use softDeletes;

class customer extends Model
{
    use HasFactory;
    use softDeletes;
    protected $guarded = ['id'];

    public static $rules = [  'title' =>'required|alpha_num|min:3',
                    'lname'=>'required|alpha',
                    'fname'=>'required',
                    'addressline'=>'required',
                    'phone'=>'numeric',
                    'town'=>'required',
                    'zipcode'=>'required'];
    public static $messages = [
            'required' => 'Ang :attribute field na ito ay kailangan',
            'min' => 'masyadong maigsi ang :attribute',
            'alpha' => "pawang letra lamang",
            'fname.required' => 'ilagay ang apelyido'
        ];
}
