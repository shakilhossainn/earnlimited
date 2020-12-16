<?php

namespace App\Http\Controllers;

use App\Models\Withdrow;
use Illuminate\Http\Request;

class WithdrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $withdrows = Withdrow::orderBy('id','desc')->get();
        return view('admin.withdrow.index', compact('withdrows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Models\Withdrow  $withdrow
     * @return \Illuminate\Http\Response
     */
    public function show(Withdrow $withdrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Withdrow  $withdrow
     * @return \Illuminate\Http\Response
     */
    public function edit(Withdrow $withdrow)
    {
        //
    }

    public function success($id){
        Withdrow::find($id)->update([ 'status' => 1]);
        return redirect()->back()->with('massage','Withdrow is recived');
    }
    public function reject($id){
        Withdrow::find($id)->update([ 'status' => 2]);
        return redirect()->back()->with('error','Withdrow is rejected');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Withdrow  $withdrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Withdrow $withdrow)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Withdrow  $withdrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Withdrow $withdrow)
    {
       ;
    }
}
