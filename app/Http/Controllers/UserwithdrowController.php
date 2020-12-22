<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Withdrow;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserwithdrowController extends Controller
{
    public function index(){

        $historys =Withdrow::where('user_id','=',auth()->user()->id)->orderBy('id','desc')->limit(10)->get();
        return view('usdashboard.withdrow.index', compact('historys'));
    }

    public function store(Request $request,$user)
    {
        $validatedData = $request->validate([
            'amount' => 'required',
            'number' => 'required',
            'payment_method' => 'required',
        ]);

        $user_count =  User::where('refer_by', auth()->user()->refer_code)
                      ->where('active_id','=',1)
                      ->count();

        if(auth()->user()->active_id != 1){
            Alert::toast('Your Account is not active ! please active your account', 'error');
                return redirect()->back();
            }elseif(auth()->user()->active_id==3){
                Alert::toast('Your Account is now hold please contact admin', 'warning');
                return redirect()->back();
            }else{
                if ($user_count >= 3) {
                    if (auth()->user()->balance >= $request->amount) {


                    $users = auth()->user()->balance;
                    $bal = auth()->user()->balance - $request->amount;
                    User::find($user)->update(['balance' => $bal]);


                    $with = Withdrow::create([
                        'status'=> 0,
                        'user_id'=> $user,
                        'amount'=> $request->amount,
                        'phone_num'=> $request->number,
                        'payment_method'=> $request->payment_method,
                    ]);
                    Alert::toast('Your Payment request is Successfully', 'success');
                    return redirect()->back();
                    }else{
                        Alert::toast('Your Balance is too low', 'error');
                        return redirect()->back();
                    }
                    }
                    Alert::toast('You Have Must need to minimum 3 active refarel', 'warning');
                    return redirect()->back();
            }
        }
}
