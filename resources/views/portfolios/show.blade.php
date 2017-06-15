@extends('main')

@section('title', '| View Portfolio')



@section('content')

        <h1>{{ $portfolio->title }}</h1>

        <p class="lead">
        
                {{ $portfolio->body }}
                
        </p>

@endsection

