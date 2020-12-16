<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskdoneContorller extends Controller
{
    public function store(Task $task,Request $request)
    {
        if($task->usertaskby($request->user()))
        {
        return response(null , 409);

    }

            $validatedData = $request->validate([
                'description' => 'required',
            ]);

            $task->usertask()->create([
                'user_id'=> $request->user()->id,
                'task_id'=> $task->id,
                'task_ans'=> $request->description,
            ]);


            $ref = User::where('refer_by', auth()->user()->refer_code)
            ->where('active_id','=',1)
            ->count();
            $ref_amount = '0';
            if($ref<=10){
                 $ref_amount =  20;
            }elseif($ref<=20){
                 $ref_amount = 40;
            }elseif($ref<=30){
                 $ref_amount = 80;
            }elseif($ref<=40){
                 $ref_amount = 100;
            }
            $user = auth()->user()->id;
            $bal = auth()->user()->balance + $ref_amount;
            User::find($user)->update(['balance' => $bal]);

            Alert::success('Task Success', 'Your Task Completed Successfully');
            return redirect()->route('home');




    }
}
