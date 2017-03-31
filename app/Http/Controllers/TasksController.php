<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\TaskCategories;
use App\TaskState;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('user_id',Auth::user()->id)->orderBy('progress','asc')->orderBy('initial_date','asc')->get();
        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task = new Task;
        $all_categories = TaskCategories::pluck('description','id');
        $all_states = TaskState::pluck('description','id');
        $task_category = new TaskCategories;
        $task_state = new TaskState;
        return view('tasks.create', compact('task','all_categories','all_states','task_category','task_state'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task(['description' => $request->description,
            'initial_date' => $request->initial_date,
            'end_date' => $request->end_date,
            'days_estimated' => $request->days_estimated,
            'priority' => $request->priority,
            'category_id' =>$request->category_id,
            'state_id' => $request->state_id,
            'user_id' => Auth::user()->id]);

        if ($task->save()){
            return redirect('/tasks');
        }else{
            return redirect('/tasks/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        $all_categories = TaskCategories::pluck('description','id');
        $all_states = TaskState::pluck('description','id');
        $task_category = TaskCategories::find($task->category_id)->getID();
        $task_state = TaskState::find($task->state_id)->getID();
        return view('tasks.edit', compact('task','all_categories','all_states','task_category','task_state'));
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
        $task = Task::find($id);
        $task->description = $request->description;
        $task->initial_date = $request->initial_date;
        $task->end_date = $request->end_date;
        $task->days_estimated = $request->days_estimated;
        $task->priority = $request->priority;
        $task->progress = $request->progress;
        $task->category_id = $request->category_id;
        $task->state_id = $request->state_id;
        if ($task->save()){
            return redirect('/tasks');
        }else{
            //return view('tasks.edit', compact('task'));
            return redirect('tasks/'.$task->id.'/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        if($task->user_id = Auth::user()->id){
            Task::destroy($id);
            return redirect('/tasks');    
        }else{
            return redirect('/tasks');
        }

        

    }
}
