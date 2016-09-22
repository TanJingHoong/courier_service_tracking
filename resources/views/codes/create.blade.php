@extends('main')

@section('title','| Create New Code')

@section('content')
	<div class = "row">
		<div class = "col-md-8 col-md-offset-2">
			<h1>Create New Code</h1>
			<hr>

			<!-- <form action="/" method="post" enctype="multiport/form-data"> -->
			{!! Form::open(array('route' => 'codes.store')) !!}
			    {{ Form::label('code','Tracking Code:')}} <!-- label('id','value') -->
			    {{ Form::text('code',null,array('class' => 'form-control')) }} <!-- textarea('id',nothing,array(bootstrap class form control)) -->

			   	{{ Form::label('status',"Status:")}}
			   	{{ Form::textarea('status', null,array('class' => 'form-control' )) }}

			   	{{ Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}
			{!! Form::close() !!}
		</div>
	</div>

@endsection