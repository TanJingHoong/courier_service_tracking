@extends('main')

@section('title')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>Shipment Status</h1>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>Tracking Code</th>
						<th>Status</th>
						<th></th>
					</thead>	

					<tbody>

							<tr>
								<td>{{ $codes->code }}</td>
								<td>{{ $codes->status}}</td>
													
					</tbody>	
				</table>
			
		
			</div>

		</div>

	</div>







@endsection