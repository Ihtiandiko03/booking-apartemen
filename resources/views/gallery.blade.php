@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>Phoro Gallery</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
						<p>
							<ul>
								<li><a href="#">Home</a>
								</li>
								<li><a href="#">Hotel Images</a>
								</li>
							</ul>
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<div class="inn-body-section">
			<div class="container">
				<div class="row inn-page-com">
					<div class="page-head">
						<h2>Photo Gallery</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
					<!--SERVICES SECTION-->
					<div class="col-md-12">
						<div class="inn-services head-typo typo-com">
							<ul id="filters" class="clearfix">
								<li><span class="filter active" data-filter=".app, .card, .icon, .logo, .web">All</span>
								</li>
								<li><span class="filter" data-filter=".app">Hotels</span>
								</li>
								<li><span class="filter" data-filter=".card">Aminities</span>
								</li>
								<li><span class="filter" data-filter=".icon">Rooms</span>
								</li>
								<li><span class="filter" data-filter=".logo">Food Menu</span>
								</li>
								<li><span class="filter" data-filter=".web">Events</span>
								</li>
							</ul>
							<div id="portfoliolist">
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/logo/5.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio app" data-cat="app">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/app/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">APP</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio web" data-cat="web">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/web/4.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Web design</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio card" data-cat="card">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Business card</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio app" data-cat="app">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/app/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">APP</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio card" data-cat="card">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Business card</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio card" data-cat="card">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Business card</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/logo/5.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio app" data-cat="app">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/app/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">APP</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio card" data-cat="card">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Business card</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/logo/5.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/logo/5.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio icon" data-cat="icon">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Icon</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio web" data-cat="web">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/web/3.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Web design</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio icon" data-cat="icon">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Icon</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio web" data-cat="web">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Web design</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio icon" data-cat="icon">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Photo Caption</a> <span class="text-category">Icon</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio icon" data-cat="icon">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">3D Map</a> <span class="text-category">Icon</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio web" data-cat="web">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Note</a> <span class="text-category">Web design</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/logo/5.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Native Designers</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/logo/5.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Bookworm</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio icon" data-cat="icon">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Sandwich</a> <span class="text-category">Icon</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio card" data-cat="card">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/card/1.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Reality</a> <span class="text-category">Business card</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="{{asset('assets/img/portfolios/logo/5.jpg')}}" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">Speciallisterne</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--END SERVICES SECTION-->
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<!--TOP SECTION-->
@endsection