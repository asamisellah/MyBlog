@extends('layouts.mmain')

@section('title','Create New Goal')

@section('stylesheets')
	
	{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')
	
	<div class="row container">
		<div class="col s8 offset-s2">
			<h4>Create New Goal</h4>
			<hr>

			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
				{{Form::label('goal_title', 'Title:')}}
				{{Form::text('goal_title', null, ['class' => 'form-control', 'required'=>'', 'maxlength'=>'255'])}}

				{{Form::label('description', 'Description:')}}
				{{Form::textarea('description', null, ['class'=>'form-control'])}}

				{{Form::label('target_amount', 'Set Target Amount:')}}
				{{Form::number('target_amount', null, ['class'=>'form-control', 'required'=>''])}}

				{{Form::label('target_date', 'Set Target Date:')}}
				{{Form::date('target_date', \Carbon\Carbon::now(), ['class'=>'datepicker'])}}

				{{form::submit('Create Goal', ['class'=>'btn waves-effect waves-light', 'style'=>'margin-top: 20px;'])}}

			{!! Form::close() !!}
			
		</div>
		
	</div>
@endsection

@section('scripts')
	
	{!! Html::script('js/parsley.min.js') !!}

	<script type="text/javascript">
		$('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15, // Creates a dropdown of 15 years to control year,
	    today: 'Today',
	    clear: 'Clear',
	    close: 'Ok',
	    closeOnSelect: false, // Close upon selecting a date,

	    //The format to show on the `input` element
	    format: 'yyyy/mm/dd',
	  });
	</script>

@endsection