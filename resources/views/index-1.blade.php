@extends('layouts.main')
@section('container')
		<!--Check Availability SECTION-->
		<div class="inn-body-section inn-booking">
			<div class="container">
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-6">
						<div class="book-title">
							<h2>Check Availability</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="book-form inn-com-form">
							<form class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Full Name</label>
									</div>
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Email</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Phone</label>
									</div>
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Mobile</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>City</label>
									</div>
									<div class="input-field col s6">
										<input type="text" class="validate">
										<label>Country</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<select>
											<option value="" disabled selected>No of adults</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="1">4</option>
										</select>
									</div>
									<div class="input-field col s6">
										<select>
											<option value="" disabled selected>No of childrens</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="1">4</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input type="text" id="from" name="from">
										<label for="from">Check In</label>
									</div>
									<div class="input-field col s6">
										<input type="text" id="to" name="to">
										<label for="to">Check Out</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
										<label>Message</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input type="submit" value="submit" class="form-btn"> </div>
								</div>
							</form>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
		<!--End Check Availability SECTION-->
		<!--HOTEL ROOMS SECTION-->
		<div class="hom1 hom-com pad-bot-40">
			<div class="container">
				<div class="row">
					<div class="hom1-title">
						<h2>Our Hotel Rooms</h2>
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
						<!-- HOTEL GRID -->
						<div class="col-md-4">
							<div class="to-ho-hotel-con">
								<div class="to-ho-hotel-con-1">
									<div class="hom-hot-av-tic"> Available Tickets: 42 </div> <img src=" {{asset('assets/images/room/3.jpg')}}" alt=""> </div>
								<div class="to-ho-hotel-con-23">
									<div class="to-ho-hotel-con-2"> <a href="all-rooms.html"><h4>Master Room</h4></a> </div>
									<div class="to-ho-hotel-con-3">
										<ul>
											<li>City: illunois,united states
												<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
											</li>
											<li><span class="ho-hot-pri-dis">$720</span><span class="ho-hot-pri">$420</span> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- HOTEL GRID -->
						<div class="col-md-4">
							<div class="to-ho-hotel-con">
								<div class="to-ho-hotel-con-1">
									<div class="hom-hot-av-tic"> Available Tickets: 520 </div> <img src="{{asset('assets/images/room/1.jpg')}}" alt=""> </div>
								<div class="to-ho-hotel-con-23">
									<div class="to-ho-hotel-con-2"> <a href="all-rooms.html"><h4>Mini-Suite</h4></a> </div>
									<div class="to-ho-hotel-con-3">
										<ul>
											<li>City: illunois,united states
												<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
											</li>
											<li><span class="ho-hot-pri-dis">$840</span><span class="ho-hot-pri">$540</span> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- HOTEL GRID -->
						<div class="col-md-4">
							<div class="to-ho-hotel-con">
								<div class="to-ho-hotel-con-1">
									<div class="hom-hot-av-tic"> Available Tickets: 92 </div> <img src="{{asset('assets/images/room/2.jpg')}}" alt=""> </div>
								<div class="to-ho-hotel-con-23">
									<div class="to-ho-hotel-con-2"> <a href="all-rooms.html"><h4>Ultra Deluxe</h4></a> </div>
									<div class="to-ho-hotel-con-3">
										<ul>
											<li>City: illunois,united states
												<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
											</li>
											<li><span class="ho-hot-pri-dis">$680</span><span class="ho-hot-pri">$380</span> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- HOTEL GRID -->
						<div class="col-md-4">
							<div class="to-ho-hotel-con">
								<div class="to-ho-hotel-con-1">
									<div class="hom-hot-av-tic"> Available Tickets: 42 </div> <img src="{{asset('assets/images/room/4.jpg')}}" alt=""> </div>
								<div class="to-ho-hotel-con-23">
									<div class="to-ho-hotel-con-2"> <a href="all-rooms.html"><h4>Luxury Room</h4></a> </div>
									<div class="to-ho-hotel-con-3">
										<ul>
											<li>City: illunois,united states
												<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
											</li>
											<li><span class="ho-hot-pri-dis">$720</span><span class="ho-hot-pri">$420</span> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- HOTEL GRID -->
						<div class="col-md-4">
							<div class="to-ho-hotel-con">
								<div class="to-ho-hotel-con-1">
									<div class="hom-hot-av-tic"> Available Tickets: 520 </div> <img src="{{asset('assets/images/room/5.jpg')}}" alt=""> </div>
								<div class="to-ho-hotel-con-23">
									<div class="to-ho-hotel-con-2"> <a href="all-rooms.html"><h4>Premium Room</h4></a> </div>
									<div class="to-ho-hotel-con-3">
										<ul>
											<li>City: illunois,united states
												<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
											</li>
											<li><span class="ho-hot-pri-dis">$840</span><span class="ho-hot-pri">$540</span> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- HOTEL GRID -->
						<div class="col-md-4">
							<div class="to-ho-hotel-con">
								<div class="to-ho-hotel-con-1">
									<div class="hom-hot-av-tic"> Available Tickets: 92 </div> <img src="{{asset('assets/images/room/6.jpg')}}" alt=""> </div>
								<div class="to-ho-hotel-con-23">
									<div class="to-ho-hotel-con-2"> <a href="all-rooms.html"><h4>Normal Room</h4></a> </div>
									<div class="to-ho-hotel-con-3">
										<ul>
											<li>City: illunois,united states
												<div class="dir-rat-star ho-hot-rat-star"> Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
											</li>
											<li><span class="ho-hot-pri-dis">$680</span><span class="ho-hot-pri">$380</span> </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
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
						<div class="offer-l"> <span class="ol-1"></span> <span class="ol-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> <span class="ol-4">Standardized Budget Rooms</span> <span class="ol-3"></span> <span class="ol-5">$99/-</span>
							<ul>
								<li>
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
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="offer-r">
							<div class="or-1"> <span class="or-11">go</span> <span class="or-12">Stays</span> </div>
							<div class="or-2"> <span class="or-21">Get</span> <span class="or-22">70%</span> <span class="or-23">Off</span> <span class="or-24">use code: RG5481WERQ</span> <span class="or-25"></span> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="blog hom-com pad-bot-0">
			<div class="container">
				<div class="row">
					<div class="hom1-title">
						<h2>Banquet Spaces</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p>
					</div>
				</div>
				<div class="row">
					<div>
						<div class="col-md-3 n2-event">
							<!--event IMAGE-->
							<div class="n21-event hovereffect"> <img src="{{asset('assets/images/event/1.jpg')}}" alt="">
								<div class="overlay"> <a href="booking.html"><span class="ev-book">Book Now</span></a> </div>
							</div>
							<!--event DETAILS-->
							<div class="n22-event"> <a href="#!"><h4>Wedding Halls</h4></a> <span class="event-date">Capacity: 500,</span> <span class="event-by"> Price: $900</span>
								<p>undergraduate applicants are admitted on a need-blind basis, and the university offers undergraduate applicants</p>
								<!--event SHARE-->
								<div class="event-share">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 n2-event">
							<!--event IMAGE-->
							<div class="n21-event hovereffect"> <img src="{{asset('assets/images/event/2.jpg')}}" alt="">
								<div class="overlay"> <a href="booking.html"><span class="ev-book">Book Now</span></a> </div>
							</div>
							<!--event DETAILS-->
							<div class="n22-event"> <a href="#!"><h4>Business Meetings</h4></a> <span class="event-date">Capacity: 500,</span> <span class="event-by"> Price: $700</span>
								<p>undergraduate applicants are admitted on a need-blind basis, and the university offers undergraduate applicants</p>
								<!--event SHARE-->
								<div class="event-share">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 n2-event">
							<!--event IMAGE-->
							<div class="n21-event hovereffect"> <img src="{{asset('assets/images/event/3.jpg')}}" alt="">
								<div class="overlay"> <a href="booking.html"><span class="ev-book">Book Now</span></a> </div>
							</div>
							<!--event DETAILS-->
							<div class="n22-event"> <a href="#!"><h4>Social Event</h4></a> <span class="event-date">Capacity: 420,</span> <span class="event-by"> Price: $750</span>
								<p>undergraduate applicants are admitted on a need-blind basis, and the university offers undergraduate applicants</p>
								<!--event SHARE-->
								<div class="event-share">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 n2-event">
							<!--event IMAGE-->
							<div class="n21-event hovereffect"> <img src="{{asset('assets/images/event/4.jpg')}}" alt="">
								<div class="overlay"> <a href="booking.html"><span class="ev-book">Book Now</span></a> </div>
							</div>
							<!--event DETAILS-->
							<div class="n22-event"> <a href="#!"><h4>Birthdays and Debut</h4></a> <span class="event-date">Capacity: 240,</span> <span class="event-by"> Price: $500</span>
								<p>undergraduate applicants are admitted on a need-blind basis, and the university offers undergraduate applicants</p>
								<!--event SHARE-->
								<div class="event-share">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a>
										</li>
									</ul>
								</div>
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
						<h2>News & Event</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Aenean euismod sem porta est consectetur posuere. Praesent nisi velit, porttitor ut imperdiet a, pellentesque id mi.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="bot-gal h-gal">
							<h4>Photo Gallery</h4>
							<ul>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/8.jpg')}}" alt="">
								</li>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/9.jpg')}}" alt="">
								</li>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/10.jpg')}}" alt="">
								</li>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/11.jpg')}}" alt="">
								</li>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/1.jpg')}}" alt="">
								</li>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/2.jpg')}}" alt="">
								</li>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/3.jpg')}}" alt="">
								</li>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/4.jpg')}}" alt="">
								</li>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/5.jpg')}}" alt="">
								</li>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/6.jpg')}}" alt="">
								</li>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/7.jpg')}}" alt="">
								</li>
								<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('assets/images/ami/8.jpg')}}" alt="">
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="bot-gal h-vid">
							<h4>Video Gallery</h4>
							<iframe src="https://www.youtube.com/embed/mG4G8crGQ34?autoplay=0&showinfo=0&controls=0"  allowfullscreen></iframe>
							<h5>Maecenas sollicitudin lacinia</h5>
							<p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
							<p>Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus.</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
@endsection
