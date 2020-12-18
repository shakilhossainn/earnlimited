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
                'current_password'=>['required',new MatchOldPass],
                'new_password'=>['required'],
                'confirm_password'=>['same:new_password'],
            ]);

            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
            dd('password changed');
    }
}
