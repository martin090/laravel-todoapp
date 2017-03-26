{!! Form::open(['url' => $url,'method' => $method]) !!}
	<div class="form-group">
		{{Form::text('description',$task->description,['class' => 'form-control', 'placeholder' => 'Descripción'])}}
	</div>
	<div class="form-group">
		{{Form::date('initial_date',$task->initial_date,['class' => 'form-control', 'placeholder' => 'Fecha de Inicio'])}}
	</div>
	<div class="form-group">
		{{Form::date('end_date',$task->end_date,['class' => 'form-control', 'placeholder' => 'Fecha de Fin'])}}
	</div>
	<div class="form-group">
		{{Form::number('days_estimated',$task->days_estimated,['class' => 'form-control', 'placeholder' => 'Estimación (en días)'])}}
	</div>
	<div class="form-group">
		{{Form::number('priority',$task->priority,['class' => 'form-control', 'placeholder' => 'Prioridad'])}}
	</div>
	<div class="form-group">
		{{Form::number('progress',$task->progress,['class' => 'form-control', 'placeholder' => 'Avance'])}}
	</div>

	<div class="form-group">

		{{Form::select('category_id',$all_categories,$task_category,['class' => 'form-control', 'placeholder' => 'Categoria'])}}
		
	</div>
	<div class="form-group">
		{{Form::select('state_id',$all_states,$task_state,['class' => 'form-control', 'placeholder' => 'Estado'])}}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/tasks')}}"> Regresar a listado de tareas </a>
		<input type="submit" name="Enviar" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close() !!}