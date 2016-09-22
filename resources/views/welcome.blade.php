@extends('main')

@section('title' , '| Welcome')

@section('content')

    <div class = "row">
                <div class = col-md-12>
                    <h1>Shipment Tracking</h1>
                    <hr>
                    {{ Form::open(array('url' => '')) }}

			   			{{ Form::label('code','Tracking Code:')}} <!-- label('id','value') -->
			    		{{ Form::text('code',null,array('class' => 'form-control')) }} <!-- textarea('id',nothing,array(bootstrap class form control)) -->
			   			
			  		 	{{ Form::submit('Track it',array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}

						{!! Form::close() !!}
                </div>
            </div>
    



@endsection






