@extends('main')

@section('title' , 'Edit the Portfolio')

@section('stylesheet')

<link rel="stylesheet" type="text/css" href="{{mix('assets/css/parsley.css')}}" />
<link rel="stylesheet" type="text/css" href="{{mix('assets/css/select2.min.css')}}" />

@endsection


@section('content')



<div class="row">

   {!! Form::model($portfolio , ['route' => ['portfolios.update' , $portfolio->id ] , 'method'=> 'PUT'] )  !!}
        <div class="col-md-8">
                  {{Form::label('title' , 'Title')}}
                  {{ Form::text('title', null , array('class' => 'form-control input-lg form-spacing-top')) }}


                  {{ Form::label('slug' , 'Slug', ['class' => 'form-spacing-top']) }}
                  {{ Form::text('slug', null , ['class' => 'form-control'])}}


                  {{ Form::label('category_id' , 'Category:')}}
                  {{ Form::select('category_id', $categories , null , ['class' => 'form-control']) }}

                  
                  {{ Form::label('tags' , 'Tags:') }}
                  {{ Form::select('tags[]', $tags , null , ['class' => 'select2-multi form-control' , 'multiple' => 'multiple']) }}


       



                  {{Form::label('body' , 'Body' , array('class' => 'form-spacing-top' ))}}
                  {{ Form::textarea('body', null , array('class'=> 'form-control')) }}
         
               
               
        </div>



        <div class="col-md-4">   <!-- Sidebar -->
                <div class="well">
                        <dl class="dl-horizontal">
                                <dt>Created At:</dt>
                                <dd>{{ date('jS M , Y h:ia' , strtotime($portfolio->created_at)) }}</dd>
                        </dl>

                        <dl class="dl-horizontal">
                                <dt>Last Updated:</dt>
                               <dd>{{ date('jS M , Y h:ia' , strtotime($portfolio->updated_at)) }}</dd>
                        </dl>

                        <hr>

                        <div class="row">
                                <div class="col-sm-6">

                                      {!! Html::linkRoute('portfolios.show' , 'Cancel' , array($portfolio->id) , array('class'=>'btn btn-danger btn-block') ) !!}
                                </div>
                                <div class="col-sm-6">

                                     {{  Form::submit('Save Chnages',array('class'=>'btn btn-success btn-block')) }}
                                        
                                </div>
                        </div>

                </div>
        </div>

      {!! Form::close() !!}

</div>   <!-- end of .row (form) -->

@endsection



@section('scripts')

       <script type="text/javascript" src="{{ asset('assets/js/select2.full.js')}}"></script> 

       <script type="text/javascript">
           
           $('.select2-multi').select2();

       </script>

@endsection

