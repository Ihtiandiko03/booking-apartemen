@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>Image Slider</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
						<p>
							<ul>
								<li><a href="#">Home</a>
								</li>
								<li><a href="#">Image Slider</a>
								</li>
							</ul>
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<div class="inn-body-section pad-bot-55">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2>Image Slider</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h1>Ultimate Slider</h1>
							<p>The raised button is a standard button that signify actions and seek to give depth to a mostly flat page. </p>
							<div class="slider fullscreen">
								<ul class="slides">
									<li> <img src="{{asset('assets/images/slider/1.jpg')}}" alt="">
										<!-- random image -->
										<div class="caption center-align slid-cap">
											<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
											<h2>This is our big Tagline!</h2>
											<p>Mauris non placerat nulla. Sed vestibulum quam mauris, et malesuada tortor venenatis at.Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p> <a href="#" class="waves-effect waves-light">Booking</a><a href="#">Booking</a> </div>
									</li>
									<li> <img src="{{asset('assets/images/slider/1.jpg')}}" alt="">
										<!-- random image -->
										<div class="caption center-align slid-cap">
											<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
											<h2>This is our big Tagline!</h2>
											<p>Mauris non placerat nulla. Sed vestibulum quam mauris, et malesuada tortor venenatis at.Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p> <a href="#" class="waves-effect waves-light">Booking</a><a href="#">Booking</a> </div>
									</li>
									<li> <img src="{{asset('assets/images/slider/1.jpg')}}" alt="">
										<!-- random image -->
										<div class="caption center-align slid-cap">
											<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
											<h2>This is our big Tagline!</h2>
											<p>Mauris non placerat nulla. Sed vestibulum quam mauris, et malesuada tortor venenatis at.Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p> <a href="#" class="waves-effect waves-light">Booking</a><a href="#">Booking</a> </div>
									</li>
									<li> <img src="{{asset('assets/images/slider/1.jpg')}}" alt="">
										<!-- random image -->
										<div class="caption center-align slid-cap">
											<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
											<h2>This is our big Tagline!</h2>
											<p>Mauris non placerat nulla. Sed vestibulum quam mauris, et malesuada tortor venenatis at.Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p> <a href="#" class="waves-effect waves-light">Booking</a><a href="#">Booking</a> </div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h3>Fixed Action Button(Desktop right side bottom)</h3>
							<p>The raised button is a standard button that signify actions and seek to give depth to a mostly flat page.</p>
							<div class="fixed-action-btn horizontal click-to-toggle">
								<a class="btn-floating btn-large red"> <i class="material-icons">menu</i> </a>
								<ul>
									<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
									</li>
									<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
									</li>
									<li><a class="btn-floating green"><i class="material-icons">publish</i></a>
									</li>
									<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h3>Submit Button</h3>
							<p>The raised button is a standard button that signify actions and seek to give depth to a mostly flat page.</p>
							<button class="btn waves-effect waves-light" type="submit" name="action">Submit <i class="material-icons right">send</i> </button>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h3>Large Button</h3>
							<p>The raised button is a standard button that signify actions and seek to give depth to a mostly flat page.</p> <a class="waves-effect waves-light btn-large">Button</a> <a class="waves-effect waves-light btn-large"><i class="material-icons left">cloud</i>button</a> <a class="waves-effect waves-light btn-large"><i class="material-icons right">cloud</i>button</a> </div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h3>Disable Button</h3>
							<p>The raised button is a standard button that signify actions and seek to give depth to a mostly flat page.</p> <a class="waves-effect waves-light btn-large disabled">Button</a> <a class="waves-effect waves-light btn-large disabled"><i class="material-icons left">cloud</i>button</a> <a class="waves-effect waves-light btn-large disabled"><i class="material-icons right">cloud</i>button</a> </div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<!--TOP SECTION-->
@endsection