@extends('main')

@section('title', '| Create New Portfolio')

@section('stylesheet')

<link rel="stylesheet" type="text/css" href="{{mix('assets/css/parsley.css')}}" />
<link rel="stylesheet" type="text/css" href="{{mix('assets/css/select2.min.css')}}" />

@endsection

@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Create New Portfolio</h1>
            <hr>
            {!! Form::open(array('route' => 'portfolios.store','data-parsley-validate'=>'')) !!}


                {{ Form::label('title', 'Title') }}
                {{ Form::text('title',null , array('class' => 'form-control',' placeholder'=> 'Enter The Title' , 'required' => '', 'maxlength' => '100')) }}

                {{ Form::label('slug', 'Slug') }}
                {{ Form::text('slug',null , array('class' => 'form-control',' placeholder'=> 'Enter The Slug' , 'required' => '', 'minlength'=>'5', 'maxlength' => '100')) }}

                {{ Form::label('category_id' , 'Category:') }}
                <select name="category_id" id="" class="form-control">
                
                    @foreach($categories as $category)

                        <option value="{{ $category->id }}"> {{ $category->name }}</option>

                    @endforeach   
                                    
                </select>



                {{ Form::label('tags' , 'Tags:') }}
                <select name="tags[]" id="" class="select2-multi form-control" multiple="multiple">
                
                    @foreach($tags as $tag)

                        <option value="{{ $tag->id }}"> {{ $tag->name }}</option>

                    @endforeach   
                                    
                </select>




                {{ Form::label('body', 'Body') }}
                {{ Form::textarea('body', null , array('class' => 'form-control', ' placeholder' => 'Enter your little story',  'required' => '')) }}


              {{ Form::submit('Create new Portfolio', array('class' => 'btn btn-info btn-lg btn-block' , 'style'=> 'margin-top:20px;')) }}


            {!! Form::close() !!}

        </div>
    </div>


@endsection

@section('scripts')

       <script type="text/javascript" src="{{ mix('assets/js/parsley.min.js') }}"></script> 
       <script type="text/javascript" src="{{ asset('assets/js/select2.full.js')}}"></script> 

       <script type="text/javascript">
           
           $('.select2-multi').select2();

       </script>
@endsection

