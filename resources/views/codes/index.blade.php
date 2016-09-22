@extends('main')

@section('title', '|All Tracking Codes')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Tracking Codes</h1>
		</div>

		<div class="col-md-2">
			<a href={{ route('codes.create') }} class ="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New</a>
		</div>

		<div class="col-md-12">
			<hr>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>#</th>
						<th>Tracking Code</th>
						<th>Status</th>
						<th>Created At</th>
						<th></th>
					</thead>	

					<tbody>
						@foreach($codes as $code)

							<tr>
								<th>{{ $code->id }}</th>
								<td>{{ $code->code }}</td>
								<td>{{ $code->status}}</td>
								<td>{{ date('M j, Y h:ia',strtotime($code->created_at)) }}</td>
								<td><a href="{{ route('codes.edit',$code->id) }}" class="btn btn-default btn-sm">Edit</a>
								{!! Form::open(['route' => ['codes.destroy',$code->id], 'method' => 'DELETE']) !!}

								{!! Form::submit('Delete', ['class' => 'btn btn-default btn-sm']) !!}

								{!! Form::close() !!}</td>
								</tr>

						@endforeach

					</tbody>	
				</table>

				<div class ="text-center">
					{!! $codes->links(); !!}
				</div>
			</div>
		</div>

	</div>







@endsection