@extends('main')

@section('title', 'Edit Tracking Code')

@section('content')

	<div class = "row">
		{!! Form::model($code,['route' => ['codes.update',$code->id],'method' => 'PUT']) !!}
		<div class = "col-md-8">
			{{ Form::label('code','Tracking Code:') }}
			{{ Form::text('code',null,["class" => 'form-control']) }}

			{{ Form::label('status','Status:',['class' =>'form-spacing-top']) }}
			{{ Form::textarea('status',null,['class' => 'form-control']) }}
		</div>

	<div class = "col-md-4">
			<div class = "well">
				<dl class = "dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia',strtotime($code->created_at)) }}</dd>
				</dl>

				<dl class = "dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia',strtotime($code->updated_at)) }}</dd>
				</dl>

				<hr>

				<div class = "row">
					<div class = "col-sm-6">
						{!! Html::linkroute('codes.index', 'Cancel', array() ,array('class' => 'btn btn-success btn-block')) !!}
						<!-- linkRoute('url','value',array(item to pass in for edit),array(button attribute)) -->
						
					</div>

					<div class = "col-sm-6">
						{{ Form::submit('Save Changes',['class' => 'btn btn-success btn-block'])}}
					</div>
				</div>

			</div>
		</div>		

			{!! Form::close() !!}
	</div> <!-- End of the form -->






@endsection