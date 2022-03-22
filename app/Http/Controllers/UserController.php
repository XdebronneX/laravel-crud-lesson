<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class UserController extends Controller
{
   public function getSignup(){
        return view('user.signup');
    }
     public function postSignup(Request $request){
        $this->validate($request, [
            'email' => 'email| required| unique:users',
            'password' => 'required| min:4'
        ]);
         $user = new User([
            'name' => $request->name,
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
         $user->save();
         Auth::login($user);
         return redirect()->route('user.profile');
    }
    
    public function getProfile(){
        return view('user.profile');
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/item');
    }

    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'email| required',
            'password' => 'required| min:4'
        ]);
         if(Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')])){
            return redirect()->route('user.profile');
        }
        else
        {
            return redirect()->back();
        };
     }
}
