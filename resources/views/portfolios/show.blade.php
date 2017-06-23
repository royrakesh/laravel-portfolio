@extends('main') 
@section('title', '| View Portfolio') 
@section('content')


<div class="row">
        <div class="col-md-8">
                <h1>{{ $portfolio->title }}</h1>
                <p class="lead">{{ $portfolio->body }}</p>
        </div>



        <div class="col-md-4">   <!-- Sidebar -->
                <div class="well">

                        <dl class="dl-horizontal">
                                <dt>URL: </dt>
                                <dd><a href="{{ url('$portfolio->slug') }}">{{ url('$portfolio->slug') }}</a></dd>
                        </dl>



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

                                      {!! Html::linkRoute('portfolios.edit' , 'Edit' , array($portfolio->id) , array('class'=>'btn btn-info btn-block') ) !!}
                                </div>
                                <div class="col-sm-6">

                                         {!!  Form::open(array('route' => ['portfolios.destroy' , $portfolio->id] , 'method'=> 'DELETE')) !!}

                                         {!! Form::submit('Delete', array('class'=>'btn btn-danger btn-block')) !!}
                                         
                                         {!! Form::close() !!}
                                </div>
                        </div>
                        <hr>
                        <div class="row">
                                <div class="col-md-12 text-center"> <a  href="{{route('portfolios.index')}}" class="btn btn-success">Back to Portfolios <<</a> </div>
                        </div>

                </div>
        </div>

</div>


@endsection