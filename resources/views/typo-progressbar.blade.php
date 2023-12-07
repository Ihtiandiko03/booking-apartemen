@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>Loading Progressbar</h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
						<p>
							<ul>
								<li><a href="#">Home</a>
								</li>
								<li><a href="#">Progressbar</a>
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
						<h2>Progress Bar</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>We provides several types of progress bars</p>
					</div>
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h1>Basic Progress Bar</h1>
							<p>A progress bar can be used to show a user how far along he/she is in a process. </p>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"> <span class="sr-only">70% Complete</span> </div>
							</div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h2>Progress Bar With Label</h2>
							<p>A progress bar can be used to show a user how far along he/she is in a process. </p>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"> 70% </div>
							</div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h3>Colored Progress Bars</h3>
							<p>A progress bar can be used to show a user how far along he/she is in a process. </p>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"> 40% Complete (success) </div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> 50% Complete (info) </div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"> 60% Complete (warning) </div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"> 70% Complete (danger) </div>
							</div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h3>Striped Progress Bars</h3>
							<p>A progress bar can be used to show a user how far along he/she is in a process. </p>
							<div class="progress">
								<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"> 40% Complete (success) </div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> 50% Complete (info) </div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"> 60% Complete (warning) </div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"> 70% Complete (danger) </div>
							</div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h3>Animated Progress Bar</h3>
							<p>A progress bar can be used to show a user how far along he/she is in a process. </p>
							<div class="progress">
								<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"> 40% </div>
							</div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h3>Stacked Progress Bars</h3>
							<p>A progress bar can be used to show a user how far along he/she is in a process. </p>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" style="width:40%"> Free Space </div>
								<div class="progress-bar progress-bar-warning" role="progressbar" style="width:10%"> Warning </div>
								<div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%"> Danger </div>
							</div>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<!--TOP SECTION-->
@endsection