<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }

    public function search()
    {
        $user = Auth::user();
        return view('search', compact('user'));
    }

    public function upload()
    {
        $user = Auth::user();
        return view('upload', compact('user'));
    }

    public function shop()
    {
        $user = Auth::user();
        return view('shop', compact('user'));
    }

    public function notification()
    {
        $user = Auth::user();
        return view('notification', compact('user'));
    }

    public function message()
    {
        $user = Auth::user();
        return view('message', compact('user'));
    }
}
