<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\MatchOldPass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    //
    public function index(){
        $user =  User::where('refer_by', auth()->user()->refer_code)
                      ->where('active_id','=',1)
                      ->count();
        return view('usdashboard.profile.index',compact('user'));
    }
    public function edit(Request $request, User $user){
        $this->validate($request,[
            'name' => 'required|max:255',
            'phone_num' => 'max:13',
        ]);
        if($request->hasFile('image')){
            $filename= $request->image->getClientOriginalName();
            if (auth()->user()->image) {
                Storage::delete('/public/image/'.auth()->user()->image);
            }
            $request->image->storeAs('image',$filename, 'public');

         $user->update([
            'image'=> $filename,
         ]);}

         $user->update([
            'name'=> $request->name,
            'phone_num'=> $request->phone_num,
            'description'=> $request->description,
            'address'=> $request->address,
         ]);

        Alert::toast('Your info is updated', 'success');
        return redirect()->back();
    }
    public function storepass(Request  $request){
            $request->validate([
                'current_password'=>'required',
                'password'=>'required|string|min:6|confirmed',
                'password_confirmation'=>'required',
            ]);

            $user= auth()->user();
                if (!Hash::check($request->current_password, $user->password)) {
                    Alert::toast('Your Corrent Password is not match', 'error');
                    return back();
                }else{
                    //   dd($request->password);
                    User::find($user->id)->update(['password'=>Hash::make($request->password)]);
                    Alert::toast('Your Password is Changed', 'success');
                    return back();
                }

    }
}
