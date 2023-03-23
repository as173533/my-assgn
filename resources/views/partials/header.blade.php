		
<div class="site-mobile-menu site-navbar-target">
	<div class="site-mobile-menu-header">
		<div class="site-mobile-menu-close mt-3">
		<span class="icon-close2 js-menu-toggle"></span>
		</div>
	</div>
	<div class="site-mobile-menu-body"></div>
</div>
<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
	<div class="container">
		<div class="row align-items-center position-relative">
			<div class="site-logo">
				<a href="{{route('/')}}" class="logo-img">
				<img src="{{ URL::asset('public/frontend/images/logo.png') }}" class="img-fluid">
				</a>
			</div>
			<div class="col-12">
				<nav class="site-navigation text-center ml-auto mr-auto" role="navigation">
				<ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
					<li>
					<a href="{{route('/')}}" class="nav-link {{(in_array(\Request::route()->getName(),['/']))?'active':''}}">Home</a>
					</li>
					<li>
					<a href="#" class="nav-link {{(in_array(\Request::route()->getName(),['about-us']))?'active':''}}">About Us</a>
					</li>
					<li>
					<a href="#" class="nav-link {{(in_array(\Request::route()->getName(),['contact-us']))?'active':''}}">Contact Us</a>
					</li>
					@if (Auth()->guard('frontend')->guest())
					<li class="desktop-hide">
					<a href="{{route('signup')}}" class="nav-link">Signup</a>
					</li>
					<li class="desktop-hide te">
					<a href="{{route('login')}}" class="nav-link">Signin</a>
					</li>
					@else
					<li class="desktop-hide te">
					<a href="{{route('my-profile')}}" class="nav-link">My Account</a>
					</li>
					@endif
				</ul>
				</nav>
				<div class="log-in-btn mobile-hide">
				<ul class="list-unstyled">
				@if (Auth()->guard('frontend')->guest())
					<li class="list-inline-item"><a href="{{route('signup')}}" class="btn btn-logs"><i class="icofont-lock"></i> Signup</a></li>
					<li class="list-inline-item left-br"><a href="{{route('login')}}" class="btn btn-logs"><i class="fa fa-sign-in" aria-hidden="true"></i> Signin</a></li>
				@else
					<li class="list-inline-item"><a href="{{route('my-profile')}}" class="btn btn-logs"><i class="icofont-user"></i> My Account</a></li>
				@endif
				</ul>
				</div>
			</div>
			<div class="toggle-button d-inline-block d-lg-none">
				<a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black">
				<span class="icon-menu h3"></span>
				</a>
			</div>
		</div>
	</div>
</header>