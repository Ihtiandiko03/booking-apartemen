@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>Alert Messages</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
						<p>
							<ul>
								<li><a href="#">Home</a>
								</li>
								<li><a href="#">Alert Messages</a>
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
						<h2>Alerts</h2>
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
							<h1>Basic Alert Box</h1>
							<p>Bootstrap provides an easy way to create predefined alert messages</p>
							<div class="alert alert-success"> <strong>Success!</strong> Indicates a successful or positive action. </div>
							<div class="alert alert-info"> <strong>Info!</strong> Indicates a neutral informative change or action. </div>
							<div class="alert alert-warning"> <strong>Warning!</strong> Indicates a warning that might need attention. </div>
							<div class="alert alert-danger"> <strong>Danger!</strong> Indicates a dangerous or potentially negative action. </div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h2>Alert with Links</h2>
							<p>Add the alert-link class to any links inside the alert box to create "matching colored links".</p>
							<div class="alert alert-success"> <strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>. </div>
							<div class="alert alert-info"> <strong>Info!</strong> You should <a href="#" class="alert-link">read this message</a>. </div>
							<div class="alert alert-warning"> <strong>Warning!</strong> You should <a href="#" class="alert-link">read this message</a>. </div>
							<div class="alert alert-danger"> <strong>Danger!</strong> You should <a href="#" class="alert-link">read this message</a>. </div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h3>Closing Alerts</h3>
							<p>The alert-dismissible class adds some extra padding to the close button.</p>
							<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Success!</strong> This alert box could indicate a successful or positive action. </div>
							<div class="alert alert-info alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Info!</strong> This alert box could indicate a neutral informative change or action. </div>
							<div class="alert alert-warning alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Warning!</strong> This alert box could indicate a warning that might need attention. </div>
							<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action. </div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h3>Animated Alerts</h3>
							<p>The alert-dismissible class adds some extra padding to the close button.</p>
							<div class="alert alert-success alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Success!</strong> This alert box could indicate a successful or positive action. </div>
							<div class="alert alert-info alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Info!</strong> This alert box could indicate a neutral informative change or action. </div>
							<div class="alert alert-warning alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Warning!</strong> This alert box could indicate a warning that might need attention. </div>
							<div class="alert alert-danger alert-dismissable fade in"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action. </div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<!--TOP SECTION-->
@endsection