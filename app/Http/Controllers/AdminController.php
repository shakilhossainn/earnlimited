<?php

namespace App\Http\Controllers;

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
        //
        return view('admin.index');
    }

}
