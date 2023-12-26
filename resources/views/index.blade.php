@extends('layouts.main')
@section('container')
		<!--Check Availability SECTION-->
		<div>
			<div class="slider fullscreen">
				<ul class="slides">
					<li> <img src="{{asset('assets/images/slider/apartemen.jpg')}}" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h5 style="font-family: Arial; -webkit-text-stroke: 0.5px white; color: #f4364f;">Here's our small slogan.</h5>
							<h2 style="-webkit-text-stroke: 1px white; font-family: arial; color: #f4364f;">This is our big Tagline!</h2>
							<p style="font-family: Arial; -webkit-text-stroke: 0.05px white; color: #f4364f;">Mauris non placerat nulla. Sed vestibulum quam mauris, et malesuada tortor venenatis at.Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p> <a href="#" class="waves-effect waves-light">Booking</a> </div>
					</li>
					<li> <img src="{{asset('assets/images/slider/apartemen2.jpg')}}" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h5 style="font-family: Arial; -webkit-text-stroke: 0.5px white; color: #f4364f;">Here's our small slogan.</h5>
							<h2 style="-webkit-text-stroke: 1px white; font-family: arial; color: #f4364f;">This is our big Tagline!</h2>
							<p style="font-family: Arial; -webkit-text-stroke: 0.05px white; color: #f4364f;">Mauris non placerat nulla. Sed vestibulum quam mauris, et malesuada tortor venenatis at.Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p> <a href="#" class="waves-effect waves-light">Booking</a> </div>
					</li>
					<li> <img src="{{asset('assets/images/slider/apartemen3.jpg')}}" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h5 style="font-family: Arial; -webkit-text-stroke: 0.5px white; color: #f4364f;">Here's our small slogan.</h5>
							<h2 style="-webkit-text-stroke: 1px white; font-family: arial; color: #f4364f;">This is our big Tagline!</h2>
							<p style="font-family: Arial; -webkit-text-stroke: 0.05px white; color: #f4364f;">Mauris non placerat nulla. Sed vestibulum quam mauris, et malesuada tortor venenatis at.Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p> <a href="#" class="waves-effect waves-light">Booking</a> </div>
					</li>
					<li> <img src="{{asset('assets/images/slider/apartemen4.jpg')}}" alt="">
						<!-- random image -->
						<div class="caption center-align slid-cap">
							<h5 style="font-family: Arial; -webkit-text-stroke: 0.5px white; color: #f4364f;">Here's our small slogan.</h5>
							<h2 style="-webkit-text-stroke: 1px white; font-family: arial; color: #f4364f;">This is our big Tagline!</h2>
							<p style="font-family: Arial; -webkit-text-stroke: 0.05px white; color: #f4364f;">Mauris non placerat nulla. Sed vestibulum quam mauris, et malesuada tortor venenatis at.Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p> <a href="#" class="waves-effect waves-light">Booking</a> </div>
					</li>
				</ul>
			</div>
		</div>
		<!--End Check Availability SECTION-->
		<!--HOTEL ROOMS SECTION-->
		<div class="hom1 hom-com pad-bot-40">
			<div class="container">
				<div class="row">
					<div class="hom1-title">
						<h2>Our Apartmen Units</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p>
					</div>
				</div>
				<div class="row">
					<div class="to-ho-hotel">
						@foreach($unit as $u)
							<div class="col-md-4">
								<div class="to-ho-hotel-con">
									<div class="to-ho-hotel-con-1">
										@if($u->is_available == 1)
											<div class="hom-hot-av-tic"> Available </div> 
										@else
											<div class="hom-hot-noav-tic"> Not Available </div> 
										@endif
										<img src="{{ $u->image ? asset("storage/".$u->image) : asset("assets/images/no-photo-apartemen.jpg") }}" height="300" alt=""> 
									</div>
									<div class="to-ho-hotel-con-23">
										<div class="to-ho-hotel-con-2"> <a href="detailunit/{{$u->slug}}"><h4>{{$u->nama_unit}}</h4></a> </div>
										<div class="to-ho-hotel-con-3">
											<ul>
												<li>
													<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
												</li>
												<li>
													@php
														if ($u->day_price != null) {
															$price = $u->day_price;
															$type = 'day';
														} else if ($u->week_price != null) {
															$price = $u->week_price;
															$type = 'week';
														} else if ($u->month_price != null) {
															$price = $u->month_price;
															$type = 'month';
														} else if ($u->year_price != null) {
															$price = $u->year_price;
															$type = 'year';
														} else {
															$price = 0;
															$type = 'No Price';
														}
													@endphp
													<span class="ho-hot-pri">Rp{{number_format($price, 0, ',', '.')}}/{{ $type }}</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
		<!--END HOTEL ROOMS-->
		<!--TOP SECTION-->
		<div class="offer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">Standardized Budget Rooms</span> <span class="ol-3"></span> <span class="ol-5">Rp150.000/day</span>
							<ul>
								{{-- <li>
									<a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{asset('assets/images/icon/dis1.png')}}" alt="">
									</a><span>Free WiFi</span>
								</li>
								<li>
									<a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{asset('assets/images/icon/h2.png')}}" alt=""> </a><span>Breakfast</span>
								</li>
								<li>
									<a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{asset('assets/images/icon/dis3.png')}}" alt=""> </a><span>Pool</span>
								</li>
								<li>
									<a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{asset('assets/images/icon/dis4.png')}}" alt=""> </a><span>Television</span>
								</li>
								<li>
									<a href="#!" class="waves-effect waves-light btn-large offer-btn"><img src="{{asset('assets/images/icon/dis5.png')}}" alt=""> </a><span>GYM</span>
								</li> --}}
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="offer-r">
							<div class="or-1"> <span class="or-11">go</span> <span class="or-12">Stays</span> </div>
							<div class="or-2"> <span class="or-21">Get</span> <span class="or-22">70%</span> <span class="or-23">Off</span> 
								{{-- <span class="or-24">use code: RG5481WERQ</span> <span class="or-25"></span>  --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="blog hom-com pad-bot-0">
			<div class="container">
				<div class="row">
					<div class="hom1-title">
						<h2>Don't miss the promo!</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Enjoy special prices for users and also get various other interesting promotions.</p>
					</div>
				</div>
				<div class="row">
					<div>
						@foreach ($advertisement as $iklan)
						<div class="col-md-3 n2-event">
							<!--event IMAGE-->
							<div class="n21-event hovereffect"> <img src="{{asset('storage/'.$iklan->banner)}}" alt="">
								<div class="overlay"> <a href="booking.html"><span class="ev-book">Get Promo</span></a> </div>
							</div>
							<!--event DETAILS-->
							<div class="n22-event"> <a href="#!"><h4>{{$iklan->title}}</h4></a> 
								<p>{{$iklan->description}}</p>
								<!--event SHARE-->
								
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="blog hom-com pad-bot-0">
			<div class="container">
				<div class="row">
					<div class="hom1-title">
						<h2>Photo Gallery</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Below is a photo of our apartment unit</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="inn-services head-typo typo-com mar-bot-0">
							{{-- <ul id="filters" class="clearfix">
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
							</ul> --}}
							<div id="portfoliolist">
								@foreach ($galleries as $foto)
									
								<div class="portfolio logo" data-cat="logo">
									<div class="portfolio-wrapper"> <img src="{{asset('storage/'.$foto->image)}}" class="galeriutama" data-caption="Hotel Captions" alt="" />
										<div class="label">
											<div class="label-text"> <a class="text-title">{{$foto->nama_unit}}</a> <span class="text-category">Logo</span> </div>
											<div class="label-bg text-white"></div>
										</div>
									</div>
								</div>

								@endforeach

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="blog hom-com">
			<div class="container">
				<div class="row">
					<div class="hom1-title">
						<h2>Thank You</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
@endsection