@extends('main')

@section('title' , '| All Categoris')


@section('content')

	<div class="row">
		<div class="col-md-8">
			
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
					@foreach($categories as $category)
						<tr>
							<td>{{ $category->id}}</td>
							<td>{{ $category->name}}</td>
						</tr>


					@endforeach
					</tbody>
				</table>
			</div>
		</div>  <!-- end .col-md-8 -->


		<div class="col-md-4">
			<div class="well">
				
				{!! Form::open(['route' => 'categories.store']) !!}

				<h2>New Categories</h2>

				{{ Form::label('name', 'Name') }}
				{{ Form::text('name' , null , ['class'=>'form-control']) }}


				{{ Form::submit('Add New' , ['class' => 'btn btn-success btn-block btn-top' ]) }}

				{!! Form::close()  !!}
			</div>
		</div>
	</div>

@endsection