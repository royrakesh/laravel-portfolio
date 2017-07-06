@extends('main')

@section('title', "| $portfolios->title ")
@section('content')



   <div class="row">
      <div class="col-md-8 col-md-offset-2">

       <div id="imgbox"><img src="{{asset($portfolios->imageurl)}}" class="img-responsive" alt=""></div>  
         <h1>{{ $portfolios->title }}</h1>
         <span>{{ $portfolios->body }}</span>
         <hr>
          <p><strong>Posted In:</strong> {{ $portfolios->category->name }}</p>
      </div>   
   
   </div>

@endsection