@extends('main')

@section('title' , "| $tag->name Tag")
@section('content')
    





<div class="row">
   <div class="col-md-12">
   <a href="{{ route('tags.index') }}" class="btn btn-warning  pull-right">All Tags</a>
   </div>
</div>

<div class="row">
   <div class="col-md-8">
   <h1>{{ $tag->name }}     <span class="badge count-badge"> {{$tag->portfolio()->count()}} portfolios </span> </h1>
   </div>

   <div class="col-md-2">
   <a href="{{ route('tags.edit' , $tag->id) }}" class="btn btn-success btn-block btn-top">Edit</a>
   </div>

   <div class="col-md-2">
   
   {{ Form::open(['route'=>['tags.destroy', $tag->id] , 'method'=>'delete']) }}
   {{Form::submit('Delete', ['class' => 'btn btn-danger btn-top btn-block']) }}
   {{Form::close()}}

   </div>
</div>


<div class="row">
   <div class="col-md-10 col-md-offset-1">
   
   <table class="table table-hover">
         <thead>
               <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Tags</th>
                  <th></th>
               </tr>
         </thead>
         <tbody>
               @foreach($tag->portfolio as $portfolio)
               <tr>
                     <td>{{$portfolio->id }}</td>
                     <td>{{$portfolio->title }}</td>
                     <td>
                        @foreach($portfolio->tags as $tag)

                        <span class="badge">{{ $tag->name }}</span>
                           
                        @endforeach
                     
                     </td>
                     <td><a href="{{ route('portfolios.show' , $portfolio->id) }}" class="btn btn-info btn-xs">View</a></td>
               </tr>
               @endforeach
         </tbody>
   </table>
   
   </div>
</div>





@endsection