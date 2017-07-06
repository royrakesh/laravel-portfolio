@extends('main')

@section('title' , '| Edit Tags')

@section('content')



<div class="row">
   <div class="col-md-6 col-md-offset-3">
   
     {{ Form::model($tag ,['route'=> ['tags.update' , $tag->id] , 'method' => 'PUT']) }}


         {{ Form::label('name', 'Name')}}
         {{ Form::text('name', null , ['class'=>'form-control'])}}-

         {{ Form::submit('Save Changes', ['class' => 'btn btn-info btn-half'])}}

         {{ Form::close() }}



   </div>
</div>

       

    
@endsection