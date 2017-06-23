@extends('main')



@section('title', '| All Posts')


@section('content')


<div class="row">
   <div class="col-md-6">
   <h3>All Portfolios</h3>
   </div>

   <div class="col-md-6">
    <a href="{{route('portfolios.create')}}" class="btn btn-success btn-md pull-right btn-top-margin" >Create new portfolio</a>
   </div>

</div>

 <div class="row section-center"  id="grid">



 <table class="table table-hover">
	<thead>
		<tr>
			<th>Imgae</th>
      <th>Title</th>
      <th>Content</th>
      <th width="150px">Created At</th>
      <th width="150px">Updated At</th>
      <th >Action</th>
		</tr>
	</thead>
	<tbody>
   @foreach($portfolios as $portfolio)
		<tr>
			<td><img src="{{asset($portfolio->imageurl)}}"  class="img-responsive" alt="Image"></td>
      <td style="min-width:150px" >{{$portfolio->title}}</td>
      <td>{{  substr($portfolio->body , 0 ,250)}}
          {{  strlen($portfolio->body) > 250 ? "..." : "" }}</td>
      <td>{{ date('jS M , h:ia' , strtotime($portfolio->created_at)) }}</td>
      <td>{{ date('jS M,  h:ia' , strtotime($portfolio->updated_at)) }}</td>
      <td>
       {!! Html::linkRoute('portfolios.edit' , 'Edit' , array($portfolio->id) , array('class'=>'btn btn-info btn-block') ) !!}
       {!! Html::linkRoute('portfolios.show' , 'View' , array($portfolio->id) , array('class'=>'btn btn-success btn-block') ) !!}
      
      </td>
		</tr>
  @endforeach
	</tbody>
</table>
     

  </div> <!-- .row End-->


  <div class="text-center">
{!! $portfolios->links() !!}
  </div>
 



@endsection

