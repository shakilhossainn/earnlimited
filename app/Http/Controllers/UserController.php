<?php


namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Withdrow;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function another()
    {
        $users = User::orderBy('id', 'desc')
                       ->where('active_id','=',2)
                       ->get();
        return view('admin.user.inactive', compact('users'));
    }
    // public function inactive()
    // {

    //     $users = User::orderBy('id', 'desc')
    //                    ->where('active_id','=',2)
    //                    ->get();
    //     return 'shakil ahmed ';
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::orderBy('id', 'desc')
                       ->where('active_id','!=',2)
                       ->get();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        User::find($id)->update(['active_id' => 1]);
        return redirect()->back()->with('massage','User id Activeted Now');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($user)
    {
       return 'shakil';
    }


    public function destroy($id)
    {
        User::find($id)->update(['active_id' => 3]);
        return redirect()->back()->with('massage','User id Dactiveted Now');
    }
}
