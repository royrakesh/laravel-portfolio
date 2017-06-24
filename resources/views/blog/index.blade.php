@extends('main')
@section('title' , 'Blog')

@section('content')

@foreach($portfolios->chunk(4) as $portfolioschunk )
    

<div class="section-center mdl-grid" id="grid">

		@foreach($portfolioschunk as $portfolio)

			<div class="col-xs-12 col-md-3 grid-4-shadow cell-3">
				<img class="gridimage" src="{{ asset($portfolio->imageurl)}}" alt="">
					<a href="{{ url('/blog/'. $portfolio->slug)}}" class="gridtitle">{{ $portfolio->title}}</a>
						<div class="gridtext">
							{{  substr($portfolio->body , 0 ,150)}}
							{{  strlen($portfolio->body) > 150 ? "..." : "" }}
						</div>
			</div>

		@endforeach
			
</div>

@endforeach

<div class="row">
<div class="col-sm-10">
<div class="text-center">{{$portfolios->links()}}</div>
</div>
</div>
    
@endsection