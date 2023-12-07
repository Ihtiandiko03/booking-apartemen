@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>Blog and Articles Inner Page</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
						<p>
							<ul>
								<li><a href="#">Home</a>
								</li>
								<li><a href="#">Blog and Articles</a>
								</li>
							</ul>
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<div class="inn-body-section pad-bot-55">
			<div class="container">
				<div class="row inn-page-com">
					<div class="page-head">
						<h2>Restaurant: special 30% offer</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
					<!--SERVICES SECTION-->
					<div class="col-md-8">
						<div class="row inn-services in-blog">
							<div class="col-md-4"> <img src="{{asset('assets/images/ami/1.jpg')}}" alt="" /> </div>
							<div class="col-md-8">
								<h3>Restaurant</h3> <span class="blog-date">Date: December 9, 2017</span> <span class="blog-author">Author: Ross Smith</span>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
								<p>In posuere nulla a ante gravida volutpat. Nulla laoreet hendrerit elit, quis efficitur metus aliquam nec. Duis efficitur nulla sit amet mauris tincidunt, quis viverra sapien efficitur. Suspendisse lorem eros, venenatis eget ipsum elementum, venenatis consequat urna. Suspendisse venenatis, est et venenatis tempus, nibh purus consectetur turpis, eu euismod nisi ipsum a enim. Morbi eu pretium turpis. Donec laoreet lobortis nisl, non hendrerit urna mollis ut. Suspendisse fermentum dui lobortis ultricies consectetur. Aliquam erat volutpat. Proin pharetra eros vel porttitor semper. Donec eget turpis purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus eu ligula in euismod. Donec varius nunc ut magna ullamcorper vestibulum sed nec urna. Nam ipsum lorem, vestibulum quis semper vel, tincidunt in sapien.</p>
								<p>Donec feugiat nisi risus, a semper arcu pellentesque interdum. Donec efficitur est cursus, pharetra eros sed, auctor lectus. Aenean quis laoreet nulla. Nam rutrum in sapien eu sodales. Fusce bibendum aliquet placerat. Pellentesque sed cursus est. Duis scelerisque urna quis quam volutpat, vel porttitor erat rutrum. Aliquam erat volutpat. Aliquam tincidunt lorem turpis, non euismod tortor varius in. Aenean sed turpis vel diam fringilla convallis. Nunc congue orci nec sagittis varius. Donec auctor arcu at tristique commodo. Suspendisse ullamcorper, lacus at egestas interdum, libero quam sollicitudin velit, ac mollis magna nisi non magna. Nulla lobortis risus at justo dapibus, vel efficitur nibh hendrerit.</p>
								<p>Aliquam at enim at lacus varius rhoncus ac quis massa. Donec libero dui, dignissim non malesuada at, porta a leo. Maecenas blandit in mi consequat consequat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eu luctus velit. Donec mollis metus facilisis congue tristique. Aliquam et euismod diam. Pellentesque vulputate sed ligula in feugiat.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="head-typo typo-com rec-post">
							<h3>Recent Posts</h3>
							<ul>
								<li>
									<div class="rec-po-img"> <img src="{{asset('assets/images/ami/1.jpg')}}" alt="" /> </div>
									<div class="rec-po-title"> <a href="#"><h4>Large car parking</h4></a>
										<p>There are many variations of passages of Lorem Ipsum available</p> <span class="blog-date">Date: December 9, 2017</span> </div>
								</li>
								<li>
									<div class="rec-po-img"> <img src="{{asset('assets/images/ami/1.jpg')}}" alt="" /> </div>
									<div class="rec-po-title"> <a href="#"><h4>Breakfast free</h4></a>
										<p>There are many variations of passages of Lorem Ipsum available</p> <span class="blog-date">Date: December 9, 2017</span> </div>
								</li>
								<li>
									<div class="rec-po-img"> <img src="{{asset('assets/images/ami/1.jpg')}}" alt="" /> </div>
									<div class="rec-po-title"> <a href="#"><h4>Now more aminities</h4></a>
										<p>There are many variations of passages of Lorem Ipsum available</p> <span class="blog-date">Date: December 9, 2017</span> </div>
								</li>
								<li>
									<div class="rec-po-img"> <img src="{{asset('assets/images/ami/1.jpg')}}" alt="" /> </div>
									<div class="rec-po-title"> <a href="#"><h4>Special 30% offer</h4></a>
										<p>There are many variations of passages of Lorem Ipsum available</p> <span class="blog-date">Date: December 9, 2017</span> </div>
								</li>
								<li>
									<div class="rec-po-img"> <img src="{{asset('assets/images/ami/1.jpg')}}" alt="" /> </div>
									<div class="rec-po-title"> <a href="#"><h4>Restaurant</h4></a>
										<p>There are many variations of passages of Lorem Ipsum available</p> <span class="blog-date">Date: December 9, 2017</span> </div>
								</li>
							</ul>
						</div>
						<div class="head-typo typo-com">
							<h3>Restaurant</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
						</div>
					</div>
					<!--END SERVICES SECTION-->
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<!--TOP SECTION-->
@endsection