@extends('main')

@section('title', '| Create New Portfolio')

    @section('stylesheet')

        {!!Html::style('assets/css/parsley.css')!!}

    @endsection


@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Create New Portfolio</h1>
            <hr>
            {!! Form::open(array('route' => 'portfolios.store','data-parsley-validate'=>'')) !!}


                {{ Form::label('title', 'Title') }}
                {{Form::text('title',null , array('class' => 'form-control',' placeholder'=> 'Enter The Title' , 'required' => '', 'maxlength' => '100')) }}

                {{ Form::label('body', 'Body') }}
                {{Form::textarea('body', null , array('class' => 'form-control', ' placeholder' => 'Enter your little story',  'required' => '')) }}


                {{ Form::label('phoneno', 'Phone no')}}
                {{ Form::text('phoneno' , '123' , array('class' => 'form-control' , 'required' => '') )}}

{{-- 
                {{Form::label('imageurl', 'Upload your image')}}
                {{Form::file('imageurl', null , array('class' => 'form-control'))}}

 --}}

                {{Form::submit('Create new Portfolio', array('class' => 'btn btn-info btn-lg btn-block' , 'style'=> 'margin-top:20px;')) }}


            {!! Form::close() !!}

        </div>
    </div>


@endsection

@section('scripts')

        {!! Html::script('assets/js/parsley.min.js')!!}

@endsection

