<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Deal;
use App\User;

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
        $curr_user = Auth::user();

       $data['deals'] = Deal::all();
       $data['users'] = User::where('id' , '!=' , $curr_user->id)->get();
       $data['curr_user'] = $curr_user;

        return view('home')->with($data);
    }



}
