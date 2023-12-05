<!-- Header -->
<header class="header-v4">
	<!-- Header desktop -->
	<div class="container-menu-desktop">
		<!-- Topbar -->
		<div class="top-bar">
			<div class="content-topbar flex-sb-m h-full container">
				<div class="left-top-bar">
					Free shipping for standard order over $100
				</div>

				<div class="right-top-bar flex-w h-full">
					<a href="#" class="flex-c-m trans-04 p-lr-25">
						Help & FAQs
					</a>

					<a href="#" class="flex-c-m trans-04 p-lr-25">
						My Account
					</a>

					

					<a href="#" class="flex-c-m trans-04 p-lr-25">
						USD
					</a>
				</div>
			</div>
		</div>

		<div class="wrap-menu-desktop how-shadow1">
			<nav class="limiter-menu-desktop container">

				<!-- Logo desktop -->
				<a href="{{ route('home') }}" class="logo">
					<img src="{{ asset('') }}images/icons/logo-01.png" alt="IMG-LOGO">
				</a>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li class="active-menu">
							<a href="home">Home</a>
						</li>

						<li class="label1" data-label1="hot">
							<a href="categories">Shop</a>
						</li>



						
						@guest
						@if (Route::has('login'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@endif

						@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
						@endif
						@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
							</a>

							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						</li>
						@endguest
						<li>
							<a href="admin/users">Admin</a>
						</li>
					</ul>
				</div>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a href="dropdown-item" href="../"></a></li>
				</ul>

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>

					<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" >
						<a href="{{ route('cart') }}"><i class="zmdi zmdi-shopping-cart"></i>
						
						@php
    						$countCart = 0;
						@endphp

						@if(session('cart'))
    						@foreach(session('cart') as $item)
        						@php
            						$countCart += $item['quantity']; 
        						@endphp
    						@endforeach
						@endif

						{{ $countCart }}
						
					</a>
					</div>

					<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" >
						<i class="zmdi zmdi-favorite-outline"></i>
					</a>
				</div>
			</nav>
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo moblie -->
		<div class="logo-mobile">
			<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m m-r-15">
			<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
				<i class="zmdi zmdi-search"></i>
				<form class="search-model-form" action="{{ route('search') }}" method="GET">
					<input type="text" name="query" id="search-input" placeholder="Search here.....">
				</form>
			</div>

			<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
				<a href="{{ route('cart') }}"><i class="zmdi zmdi-shopping-cart"></i></a>
			</div>

			<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
				<i class="zmdi zmdi-favorite-outline"></i>
			</a>
		</div>

		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>


	<!-- Menu Mobile -->
	<div class="menu-mobile">
		<ul class="topbar-mobile">
			<li>
				<div class="left-top-bar">
					Free shipping for standard order over $100
				</div>
			</li>

			<li>
				<div class="right-top-bar flex-w h-full">
					<a href="#" class="flex-c-m p-lr-10 trans-04">
						Help & FAQs
					</a>

					<a href="#" class="flex-c-m p-lr-10 trans-04">
						My Account
					</a>

					<a href="#" class="flex-c-m p-lr-10 trans-04">
						EN
					</a>

					<a href="#" class="flex-c-m p-lr-10 trans-04">
						USD
					</a>
				</div>
			</li>
		</ul>

		<ul class="main-menu-m">
			<li>
				<a href="index.html">Home</a>
				<ul class="sub-menu-m">
					<li><a href="index.html">Homepage 1</a></li>
					<li><a href="home-02.html">Homepage 2</a></li>
					<li><a href="home-03.html">Homepage 3</a></li>
				</ul>
				<span class="arrow-main-menu-m">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
			</li>

			<li>
				<a href="product.html">Shop</a>
			</li>

			<li>
				<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
			</li>

			<li>
				<a href="blog.html">Blog</a>
			</li>

			<li>
				<a href="about.html">About</a>
			</li>

			<li>
				<a href="contact.html">Contact</a>
			</li>

		</ul>
	</div>

	<!-- Modal Search -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="images/icons/icon-close2.png" alt="CLOSE">
			</button>

			<form class="search-model-form" action="{{ route('search') }}" method="GET">
				<input type="text" name="query" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>


</header>