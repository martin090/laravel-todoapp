{!! Form::open(['url' => '/tasks/'.$task->id,'method' => 'DELETE', 'class' => 'inline']) !!}
	<button type="submit" style="background: none; padding: 0px; border: none" >
		<i class="glyphicon glyphicon-remove color-red"></i>
	</button>
{!! Form::close() !!}