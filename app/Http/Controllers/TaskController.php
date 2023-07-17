<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::id();
        return view('task.index',[
            'tasks' => Task::where('status', 'pending')
                            ->where('user_id', $user)
                            ->orderBy('priority', 'asc')
                            ->orderBy('created_at', 'desc')
                            ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $task = new Task;

        $task->title = $request->title;
        $task->description = $request->description;

        if(!$request->lead_id){
            $task->lead_id = 10;
        }else{
            $task->lead_id = $request->lead_id;
        }

        $task->user_id = $user->id;

        $task->save();

        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $user = Auth::user();

        $task->title = $request->title;
        $task->description = $request->description;
        $task->lead_id = 1;
        $task->user_id = $user->id;

        $task->save();

        return redirect()->route('task.index');
    }

    public function done()
    {

        $user = Auth::id();
        return view('task.done',[
            'tasks' => Task::where('status', 'done')
                            ->where('user_id', $user)
                            ->orderBy('priority', 'asc')
                            ->orderBy('created_at', 'desc')
                            ->get(),
        ]);


    }


    public function status(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->status = $request->status;

        $task->save();

        return redirect()->route('task.index');
    }


    public function priority(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->priority = $request->priority;

        $task->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('task.index');
    }
}
