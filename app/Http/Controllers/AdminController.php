<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use App\Models\Withdrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //login view


    public function login(){
        return view("admin.login");
    }

    // cheak user
    public function loginDashboard(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect(route('dashboard.index'));
        }else{
            return redirect('admin');
        }
    }

    // login into dashboard
    public function index()
    {
        $users =  User::count();
        $user =  User::where('active_id','=',1)->count();
        $withdrow = Withdrow::where('status', '=', 1)->get();


        return view('admin.index',compact(['user','withdrow','users']));
    }


}
