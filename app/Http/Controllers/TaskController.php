<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function view()
    {
        //
        $tasks = Task::orderBy('id','desc')->limit(1)->get();
        return view('usdashboard.task.index', compact('tasks'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = Task::orderBy('id','desc')->get();
        return view('admin.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		 return view('admin.task.create');
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

        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);

        Task::create([
            'title' => $request->title,
            'video_one' => $request->video_one,
            'video_two' => $request->video_two,
            'video_three' => $request->video_three,
            'video_four' => $request->video_four,
            'video_five' => $request->video_five,
        ]);
        return redirect()->back()->with('message', 'Your Task Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {

        return view('admin.task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);
        $task ->update([
            'title' => $request->title,
            'video_one' => $request->video_one,
            'video_two' => $request->video_two,
            'video_three' => $request->video_three,
            'video_four' => $request->video_four,
            'video_five' => $request->video_five,
        ]);
        return redirect()->back()->with('message', 'Your Task Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {

        $task->delete();
        return redirect()->back()->with('message', 'Your Task deleted Successfully');
    }
}
