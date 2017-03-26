<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class UpdateProgressController extends Controller
{
    public function update(Request $request, $id){
    	$task = Task::find($id);
    	$task->progress = 100;
    	$task->state_id = 4;
    	$task->save();
    	return redirect('/tasks');
    }
}
