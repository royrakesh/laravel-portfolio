<!-- Header Start -->
		<div class="site-header" id="mainheader">
			<div class="header-row">
				<div class="logotitle">
					<div class="site-logo"></div>
					<span class="site-description">Portfolio site</span>
				</div>
				
				
			</div>
			<div class="header-row" id="navrow">
				<div class="navcol">
					<a class="{{ Request::is('/') ? "active" : "" }}" href="/" title="">Home</a>
					<a class="{{ Request::is('blog') ? "active" : "" }}" href="/blog" title="">Blog</a>
					<a class="{{ Request::is('about') ? "active" : "" }}" href="/about" title="">About</a>
					<a class="{{ Request::is('contact') ? "active" : "" }}" href="/contact" title="">Contact</a>
					
					<a class="{{ Request::is('portfolios') ? "active" : "" }}" href="{{route('portfolios.index')}}" title="">Portfolios</a>
				</div>
			</div>
			
		</div>
		<!-- Header End -->

		