<!-- Header Start -->
		<div class="site-header" id="mainheader">
			
			
			<div class="header-row">
				<div class="logotitle">
					<div class="site-logo"></div>
					<span class="site-description">Portfolio site</span>
				</div>
			</div>   <!-- end .header-row -->

	<!-- <div class="header-row" id="navrow">
				<div class="navcol">
					<a class="{{ Request::is('/') ? "active" : "" }}" href="/" title="">Home</a>
					<a class="{{ Request::is('blog') ? "active" : "" }}" href="/blog" title="">Blog</a>
					<a class="{{ Request::is('about') ? "active" : "" }}" href="/about" title="">About</a>
					<a class="{{ Request::is('contact') ? "active" : "" }}" href="/contact" title="">Contact</a>   
				</div>
			</div> 
	-->




	<nav class="navbar navbar-default  mainnav" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				
				<li class="{{ Request::is('/') ? "active" : "" }}"><a  href="/" title="">Home</a></li>
				<li class="{{ Request::is('blog') ? "active" : "" }}"><a  href="/blog" title="">Blog</a></li>
				<li class="{{ Request::is('about') ? "active" : "" }}"><a  href="/about" title="">About</a></li>
				<li class="{{ Request::is('contact') ? "active" : "" }}"><a  href="/contact" title="">Contact</a></li>

			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				            @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
								 <li class="dropdown">
								 <i class="fa fa-user"></i>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    
												<li><a href="{{route('portfolios.index')}}" >Portfolios</a></li>
												<li><a href="{{route('categories.index')}}">Categories</a></li>
												<li><a href="{{route('tags.index')}}">Tags</a></li>
												
												<li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>





			
		</div>
		<!-- Header End -->

		