@extends('main')

@section('title' , 'Edit the Portfolio')

@section('content')



<div class="row">

   {!! Form::model($portfolio , ['route' => ['portfolios.update' , $portfolio->id ] , 'method'=> 'PUT'] )  !!}
        <div class="col-md-8">
                  {{Form::label('title' , 'Title')}}
                  {{ Form::text('title', null , array('class' => 'form-control input-lg form-spacing-top')) }}


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

