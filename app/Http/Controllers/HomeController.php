<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
       $user =  User::where('refer_by', auth()->user()->refer_code)
                      ->where('active_id','=',1)
                      ->count();
      $notices = Notice::orderBy('id','desc')->limit(1)->get();

        return view('usdashboard.index',compact(['user', 'notices']));


    }

}
