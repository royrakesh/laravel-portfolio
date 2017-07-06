@extends('main') 
@section('title', '| View Portfolio') 
@section('content')


<div class="row">
        <div class="col-md-8">
                <h1>{{ $portfolio->title }}</h1>
                <p class="lead">{{ $portfolio->body }}</p>
                <hr>

                <div class="tags">
                @foreach ($portfolio->tags as $tag)
                
                    <span class="badge">{{$tag->name}}</span>

                @endforeach


                </div>
                
        </div>



        <div class="col-md-4">   <!-- Sidebar -->
                <div class="well">

                        <dl class="dl-horizontal">
                                <label>URL: </label>
                                <span><a href="{{ route('blog.single',$portfolio->slug) }}">{{ route('blog.single',$portfolio->slug) }}</a></span>
                        </dl>



                        <dl class="dl-horizontal">
                                <label>Created At:</label>
                                <span>{{ date('jS M , Y h:ia' , strtotime($portfolio->created_at)) }}</span>
                        </dl>

                        <dl class="dl-horizontal">
                                <label>Last Updated:</label>
                               <span>{{ date('jS M , Y h:ia' , strtotime($portfolio->updated_at)) }}</span>
                        </dl>

                         <dl class="dl-horizontal">
                                <label>Category: </label>
                               <span>{{ $portfolio->category->name }}</span>
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