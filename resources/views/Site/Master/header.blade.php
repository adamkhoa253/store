<div class="colorlib-loader"></div>
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="{{ route('index') }}"><img src="images/logo.png" alt="" style="width: 300px;height: 50px;"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="{{ route('index') }}">Trang chủ</a></li>
								<li class="has-dropdown">
									<a href="{{ route('shop.index') }}">Cửa hàng</a>
									<ul class="dropdown">
										<li><a href="{{ route('cart.index') }}">Giỏ hàng</a></li>
										<li><a href="{{ route('cart.checkout') }}">Thanh toán</a></li>

									</ul>
								</li>
								<li><a href="{{ route('about.index') }}">Giới thiệu</a></li>
								<li><a href="{{ route('contact.index') }}">Liên hệ</a></li>
								<li><a href="{{ route('cart.index') }}"><i class="icon-shopping-cart"></i> Giỏ hàng [0]</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/bg-03.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
											<p><a href="{{ asset('http://www.facebook.com/adamkhoa03') }}" class="btn btn-primary">Kết nối với shop</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/bg-01.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
											<p><a href="#" class="btn btn-primary">Kết nối với shop</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/bg-02.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
											<p><a href="#" class="btn btn-primary">Kết nối với shop</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>