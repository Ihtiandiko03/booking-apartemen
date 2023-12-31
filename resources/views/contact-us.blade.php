@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--TOP SECTION-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>About Us</h4>
					<p>Curabitur auctor, massa sed interdum ornare, nulla sem vestibulum purus, eu maximus magna urna eu nunc.</p>
					<p> </p>
					<ul>
						<li><a href="#">Home</a>
						</li>
						<li><a href="#">About Us</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="inn-body-section">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2>Contact Us</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Quisque at volutpat nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 new-con">
						<h2>My-Hotel <span>Booking</span></h2>
						<p>Hotels worldwide incl. Infos, Ratings and Photos. Make your Hotel Reservation cheap.</p>
						<p>The top-rated hotel booking services.</p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="{{asset('assets/images/icon/20.png')}}" alt="">
						<h4>Address</h4>
						<p>Jl. Yos Sudarso No.80, Bumi Waras, Kec. Bumi Waras, Kota Bandar Lampung, Lampung 35225</p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="{{asset('assets/images/icon/20.png')}}" alt="">
						<h4>CONTACT INFO:</h4>
						<p> <a href="tel://0099999999" class="contact-icon">Phone: 01 234874 965478</a>
							<br> <a href="tel://0099999999" class="contact-icon">Mobile: 01 654874 965478</a>
							<br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email: info@company.com</a> </p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="{{asset('assets/images/icon/20.png')}}" alt="">
						<h4>Website</h4>
						<p> <a href="#">Website: www.mycompany.com</a>
							<br> <a href="#">Facebook: www.facebook/my</a>
							<br> <a href="#">Blog: www.blog.mycompany.com</a> </p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8242270085575!2d105.2776599749844!3d-5.443640194535815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbf2d5db3ec3%3A0x602936266543a25f!2sLampung%20City%20Mall!5e0!3m2!1sid!2sid!4v1703344678207!5m2!1sid!2sid" allowfullscreen></iframe>
			</div>
		</div>
		<!--TOP SECTION-->
@endsection