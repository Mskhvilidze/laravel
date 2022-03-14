<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome of Laravel';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'This is about page';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
           'title' => 'Services',
           'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function login(){
        $title = 'Login';
        return view('pages.login')->with('title', $title);
    }

    public function register(){
        $title = 'Register';
        return view('pages.register')->with('title', $title);
    }

}
