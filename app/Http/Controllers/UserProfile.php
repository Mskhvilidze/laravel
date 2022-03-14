<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserProfile extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function profile(){
        if(auth()->check()){
            $user = auth()->user();
            return view('pages.profile')->with('user',$user);
        }else{
            return redirect('/')->with('error', 'Please register yourself');
        }
    }

    public function invoke(Request $request, $user_id){
        if(auth()->check()){
        $user = User::find($user_id);
        return view('pages.profile')->with('user',$user);
        }else{
            return redirect('/')->with('error', 'Please register yourself');
        }
    }

}
