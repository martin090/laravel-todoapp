@extends('layouts.app')

@section('content')
<div class="container">
	<h2> Lista de tareas </h2>
</div>
<div class="container">
	<a href="{{ url('/tasks/create') }}" class="btn btn-info"> Crear tarea </a>
</div>
<br>
<div class="container">
	<table class="table table-bordered">
		<thead class="label-info">
			<tr>
				<td>ID</td>
				<td>Descripción</td>
				<td>Avance</td>
				<td>Fecha Inicio</td>
				<td>Fecha Fin</td>
				<td>Estimación (en días)</td>
				<td>Prioridad</td>
				<td>Duración Real</td>
				<td>Categoria</td>
				<td>Estado</td>
				<td>Acciones</td>
			</tr>
		</thead>
			@foreach($tasks as $task)
				<tr>
					<td> {{$task->id}} </td>
					<td> {{$task->description}} </td>
					<td> {{$task->progress}} </td>
					<td> {{$task->initial_date }}  </td>
					<td> {{$task->end_date }}  </td>
					<td> {{$task->days_estimated }} </td>
					<td> {{$task->priority }} </td>
					<td> {{$task->real_duration }} </td>
					<td> {{$task->category->description }} </td>
					<td> {{$task->state->description }} </td>
					<td> 
						<a href="{{ url('/tasks/'.$task->id.'/edit') }}"> 
							<i class="glyphicon glyphicon-pencil"></i>
						</a>
						@include('tasks.delete',['task' => $task])
						@include('updateProgress.edit',['task' => $task])
					</td>
				</tr>
			@endforeach
		<tbody>
			
		</tbody>
	</table>
</div>

@endsection