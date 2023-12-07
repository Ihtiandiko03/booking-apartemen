@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--DASHBOARD SECTION-->
		<div class="dashboard">
			<div class="db-left">
				<div class="db-left-1">
					<h4>Jana Novakova</h4>
					<p>Newyork, United States</p>
				</div>
				<div class="db-left-2">
					<ul>
						<li>
							<a href="dashboard.html"><img src="{{asset('assets/images/icon/db1.png')}}" alt="" /> All</a>
						</li>
						<li>
							<a href="db-booking.html"><img src="{{asset('assets/images/icon/db1.png')}}" alt="" /> My Bookings</a>
						</li>
						<li>
							<a href="db-new-booking.html"><img src="{{asset('assets/images/icon/db1.png')}}" alt="" /> New Booking</a>
						</li>
						<li>
							<a href="db-event.html"><img src="{{asset('assets/images/icon/db1.png')}}" alt="" /> Event</a>
						</li>
						<li>
							<a href="db-activity.html"><img src="{{asset('assets/images/icon/db1.png')}}" alt="" /> Activity</a>
						</li>
						<li>
							<a href="db-profile.html"><img src="{{asset('assets/images/icon/db1.png')}}" alt="" /> Profile</a>
						</li>
						<li>
							<a href="#"><img src="{{asset('assets/images/icon/db1.png')}}" alt="" /> Payments</a>
						</li>
						<li>
							<a href="#"><img src="{{asset('assets/images/icon/db1.png')}}" alt="" /> Logout</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="db-cent">
				<div class="db-cent-1">
					<p>Hi Jana Novakova,</p>
					<h4>Welcome to your dashboard</h4> </div>
				<div class="db-profile"> <img src="images/user.jpg" alt="">
					<h4>Angelina Jolie</h4>
					<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
				</div>
				<div class="db-profile-view">
					<table>
						<thead>
							<tr>
								<th>Age</th>
								<th>Profile Completion</th>
								<th>Join Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>32</td>
								<td>90%</td>
								<td>May 2010</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="db-profile-edit">
					<form class="col s12">
						<div>
							<label class="col s4">Full Name</label>
							<div class="input-field col s8">
								<input type="text" value="Jana Novakova" class="validate"> </div>
						</div>
						<div>
							<label class="col s4">Email id</label>
							<div class="input-field col s8">
								<input type="email" value="jana-novakova@gmail.com" class="validate"> </div>
						</div>
						<div>
							<label class="col s4">Phone</label>
							<div class="input-field col s8">
								<input type="number" value="0185419635" class="validate"> </div>
						</div>
						<div>
							<label class="col s4">Age</label>
							<div class="input-field col s8">
								<input type="number" value="34" class="validate"> </div>
						</div>
						<div>
							<div class="file-field input-field">
								<div class="btn" id="pro-file-upload"> <span>File</span>
									<input type="file"> </div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" placeholder="Upload profile picture"> </div>
							</div>
						</div>
						<div>
							<label class="col s4">Address Line 1</label>
							<div class="input-field col s8">
								<input type="text" value="28800 Orchard Lake Road" class="validate"> </div>
						</div>
						<div>
							<label class="col s4">Address Line 2</label>
							<div class="input-field col s8">
								<input type="text" value="Suite 180 Farmington Hills, U.S.A" class="validate"> </div>
						</div>
						<div>
							<div class="input-field col s8">
								<input type="submit" value="Submit" class="waves-effect waves-light pro-sub-btn" id="pro-sub-btn"> </div>
						</div>
					</form>
				</div>
			</div>
			<div class="db-righ">
				<h4>Notifications(18)</h4>
				<ul>
					<li>
						<a href="#!"> <img src="{{asset('assets/images/icon/db1.png')}}" alt="">
							<h5>Joseph, write a review</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>2 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="{{asset('assets/images/icon/db1.png')}}" alt="">
							<h5>14 New Messages</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>4 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="{{asset('assets/images/icon/db1.png')}}" alt="">
							<h5>Ads expairy soon</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>10 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="{{asset('assets/images/icon/db1.png')}}" alt="">
							<h5>Post free ads - today only</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>12 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="{{asset('assets/images/icon/db1.png')}}" alt="">
							<h5>listing limit increase</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>14 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="{{asset('assets/images/icon/db1.png')}}" alt="">
							<h5>mobile app launch</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>18 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="{{asset('assets/images/icon/db1.png')}}" alt="">
							<h5>Setting Updated</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>20 hours ago</span> </a>
					</li>
					<li>
						<a href="#!"> <img src="{{asset('assets/images/icon/db1.png')}}" alt="">
							<h5>Increase listing viewers</h5>
							<p>All the Lorem Ipsum generators on the</p> <span>2 days ago</span> </a>
					</li>
				</ul>
			</div>
		</div>
		<!--END DASHBOARD SECTION-->
		<!--TOP SECTION-->
@endsection
