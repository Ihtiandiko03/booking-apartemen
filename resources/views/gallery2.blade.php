@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>Phoro Gallery 1</h4>
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
		<div class="inn-body-section pad-bot-50">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2>Photo Gallery Grid with Popup</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-3">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="{{asset('assets/images/room/1.jpg')}}" alt="" /> </div>
					</div>
					<div class="col-md-3">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="{{asset('assets/images/room/1.jpg')}}" alt="" /> </div>
					</div>
					<div class="col-md-3">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="{{asset('assets/images/room/1.jpg')}}" alt="" /> </div>
					</div>
					<div class="col-md-3">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="{{asset('assets/images/room/1.jpg')}}" alt="" /> </div>
					</div>
					<div class="col-md-3">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="{{asset('assets/images/room/1.jpg')}}" alt="" /> </div>
					</div>
					<div class="col-md-3">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="{{asset('assets/images/room/1.jpg')}}" alt="" /> </div>
					</div>
					<div class="col-md-3">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="{{asset('assets/images/room/1.jpg')}}" alt="" /> </div>
					</div>
					<div class="col-md-3">
						<div class="gall-grid"> <img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" src="{{asset('assets/images/room/1.jpg')}}" alt="" /> </div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<!--TOP SECTION-->
@endsection