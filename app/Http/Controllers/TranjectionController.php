<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tranjection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TranjectionController extends Controller
{
    public function index(){
        return view('usdashboard.tranjection.index');
    }

    public function create(Request $request){
        $this->validate($request,[
            'tranjection' => 'required',
        ]);
        Tranjection::create([
            'user_id' => auth()->user()->id,
            'user_email' => auth()->user()->email,
        ]);
        User::find(auth()->user()->id)->update(['tranjecton_id' => $request->tranjection]);
        Alert::toast('Your Tranjection id is submited Please wait for review', 'success');
        return redirect()->back();

    }

    public function getdata()
    {
        $users = Tranjection::orderBy('id','desc')->get();
        return view('admin.requser.index',compact('users'));
    }
}
