<!doctype html>
<html lang="{{ app()->getLocale() }}">

	<head>
	
	@include('partials._head')
	
	</head>

    <body>

		@include('partials._nav')

        <div class="container">

			@include('partials._messages')

         @yield('content')

		  </div> <!-- .container end  -->

        @include('partials._footer')

		@include('partials._javascript')

		@yield('scripts')

	</body>
</html>
