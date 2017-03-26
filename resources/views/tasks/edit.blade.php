@extends('layouts.app')

@section('content')
<div class="container">
	<h2> Editar tarea </h2>
</div>
<div class="container">

	@include('tasks.form',['task' => $task, 'all_categories' => $all_categories, 'all_states' => $all_states,'task_category' => $task_category, 'task_state' => $task_state, 'url' => '/tasks/'.$task->id, 'method' => 'PATCH'])
		
</div>

@endsection