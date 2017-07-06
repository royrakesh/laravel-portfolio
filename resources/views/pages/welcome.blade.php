@extends('main')
@section('title', '| Home Page')
@section('content')	
   	<!-- Top Story Slider -->
		<div  id="slider">
			<div class="sitemax-width">
				<div class="card-width-row card-shadow">
					<div class="card-image-banner home-banner-image">
						
						<h2 class="card-image-text">Welcome</h2>
					</div>
					<div class="cardmid">
						Demo of Material Design Portfolio Template by TemplateFlip. Click on "Download" button below to download the template.
						
						
					</div>
					
					<div class="card-actions mdl-card-border">
						
					
							<a class="mdl-button button-link" href="" title="">
								Read More
							</a>
					
					</div>
					
				</div>
				
			</div>
		</div>
		<!-- Top Story Slider End -->



		<div class="section-center mdl-grid" id="grid">

		@foreach($portfolios as $portfolio)

			<div class="col-xs-12 col-md-3 grid-4-shadow cell-3">
				<img class="gridimage" src="assets/img/grid1.jpg" alt="">
					<a href="{{ url('/blog/'. $portfolio->slug)}}" class="gridtitle">{{ $portfolio->title}}</a>
						<div class="gridtext">
							{{  substr($portfolio->body , 0 ,150)}}
							{{  strlen($portfolio->body) > 150 ? "..." : "" }}
						</div>
			</div>



		@endforeach
			
		


			<div class="readmore"><a  href="{{route('blog.index')}}" class="btn readmorebtn">Read All</a>	</div>
			

		</div>

@endsection