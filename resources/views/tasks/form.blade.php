{!! Form::open(['url' => $url,'method' => $method]) !!}
	
	<div class="container media-pantalla relative inline">
		<div class="form-group">
			Descripción:
			{{Form::text('description',$task->description,['class' => 'form-control'])}}
		</div>
		<div class="form-group ">
			Fecha de inicio:
			{{Form::date('initial_date',$task->initial_date,['class' => 'form-control'])}}
		</div>
		<div class="form-group">
			Fecha de Fin:
			{{Form::date('end_date',$task->end_date,['class' => 'form-control'])}}
		</div>
		<div class="form-group">
			Estimación (en días):
			{{Form::number('days_estimated',$task->days_estimated,['class' => 'form-control'])}}
		</div>
	</div>
	<div class="container media-pantalla relative inline">
		<div class="form-group ">
			Prioridad:
			{{Form::number('priority',$task->priority,['class' => 'form-control'])}}
		</div>
		<div class="form-group">
			Avance:
			{{Form::number('progress',$task->progress,['class' => 'form-control'])}}
		</div>

		<div class="form-group">
			Categoria:
			{{Form::select('category_id',$all_categories,$task_category,['class' => 'form-control'])}}
			
		</div>
		<div class="form-group">
			Estado:
			{{Form::select('state_id',$all_states,$task_state,['class' => 'form-control'])}}
		</div>
	
	</div>
	<div class="form-group text-right">
			<a href="{{url('/tasks')}}"> Regresar a listado de tareas </a>
			<input type="submit" name="Enviar" value="Enviar" class="btn btn-success">
	</div>
		
	
	
{!! Form::close() !!}