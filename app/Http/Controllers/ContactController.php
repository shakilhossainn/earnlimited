<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

         Contact::create([
            "name" => $request->name,
            "email" => $request->email,
            "massage" => $request->message,
        ]);
        return redirect()->back()->with('massage','Your Massage is Sent');
    }

    public function massage()
    {
        $massages = Contact::orderBy('id', 'desc')->get();
        return view('admin.massage.index', compact('massages'));
    }

    public function destroy($id)
    {
        $massage = Contact::find($id);
        $massage->delete();
        return redirect()->back()->with('massage','massage deleted successfully');
    }

    public function view($id)
    {

       
        $massage = Contact::find($id);

        return view('admin.massage.view', compact('massage'));
    }
}
