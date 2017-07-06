@extends('main')

@section('title' , '| All Tags')

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
					@foreach($tags as $tag)
						<tr>
							<td>{{ $tag->id}}</td>
							<td><a href="{{ route('tags.show' , $tag->id )}}">{{ $tag->name}}</a></td>
						</tr>


					@endforeach
					</tbody>
				</table>
			</div>
		</div>  <!-- end .col-md-8 -->


		<div class="col-md-4">
			<div class="well">
				
				{!! Form::open(['route' => 'tags.store']) !!}

				<h2>New Tags</h2>

				{{ Form::label('name', 'Name') }}
				{{ Form::text('name' , null , ['class'=>'form-control']) }}


				{{ Form::submit('Add New' , ['class' => 'btn btn-success btn-block btn-top' ]) }}

				{!! Form::close()  !!}
			</div>
		</div>
	</div>

@endsection

