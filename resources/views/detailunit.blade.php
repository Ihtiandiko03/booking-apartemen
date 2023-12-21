@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
        <div class="hp-banner"> <img src="{{asset('storage/'.$gallery[0]["image"])}}" width="1500" height="400"> </div>
		<!--END HOTEL ROOMS-->
		<!--CHECK AVAILABILITY FORM-->
		<div class="check-available">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="inn-com-form">
							<form class="col s12">
								<div class="row">
									<div class="col s12 avail-title">
										<h4>Order</h4> </div>
								</div>
								<div class="row">
									<div class="input-field col s12 m4 l2">
										<select>
											<option value="" disabled selected>Durasi</option>
											<option value="Harian">Harian</option>
											<option value="Mingguan">Mingguan</option>
											<option value="Bulanan">Bulanan</option>
											<option value="Tahunan">Tahunan</option>
										</select>
									</div>
									
									<div class="input-field col s12 m4 l2">
										<input type="text" id="from" name="from">
										<label for="from">Arrival Date</label>
									</div>
									<div class="input-field col s12 m4 l2">
										<input type="text" id="to" name="to">
										<label for="to">Departure Date</label>
									</div>
									<div class="input-field col s12 m4 l2">
										<input type="submit" value="submit" class="form-btn"> </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--END CHECK AVAILABILITY FORM-->
		<div class="hom-com">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="hp-section">
								<div class="hp-sub-tit">
									<h4><span>{{$unit->nama_unit}}</span></h4>
								</div>
								<div class="hp-amini">
									<p>{{$unit->deskripsi_unit}}</p>
								</div>
							</div>
							
							<div class="hp-section">
								<div class="hp-sub-tit">
									<h4><span>Overview</span> Room</h4>
								</div>
								<div class="hp-over">
									<ul class="nav nav-tabs hp-over-nav">
										
										<li class="active">
											<a data-toggle="tab" href="#menu1"><img src="{{asset('assets/images/icon/a1.png')}}" alt=""> <span class="tab-hide">Overview</span>
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#menu2"><img src="{{asset('assets/images/icon/a1.png')}}" alt=""> <span class="tab-hide">Price</span>
											</a>
										</li>
										
									</ul>
									<div class="tab-content">

										<div id="menu1" class="tab-pane fade in active tab-space">
											<div class="hp-main-overview">
												<ul>
                                                    @foreach ($facility as $f)    
                                                        <li>{{$f->type}}: <span>{{$f->detail}}</span>
                                                        </li>
                                                    @endforeach
												</ul>
											</div>
										</div>
										<div id="menu2" class="tab-pane fade tab-space">
											<div class="hp-main-overview">
												<ul>
                                                    <li>Price per day: <span>Rp{{number_format($priceDay, 0, ',', '.')}}</span></li>
                                                    <li>Price per week: <span>Rp{{number_format($priceWeek, 0, ',', '.')}}</span></li>
                                                    <li>Price per month: <span>Rp{{number_format($priceMonth, 0, ',', '.')}}</span></li>
                                                    <li>Price per year: <span>Rp{{number_format($priceYear, 0, ',', '.')}}</span></li>
												</ul>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="hp-section">
								<div class="hp-sub-tit">
									<h4><span>Photo Gallery</span> {{$unit->nama_unit}}</h4>
								</div>
								<div class="">
									<div class="h-gal">
										<ul>
                                            @foreach ($gallery as $g)    
											<li><img class="materialboxed" data-caption="Hotel Captions" src="{{asset('storage/'.$g["image"])}}" alt="">
											</li>
                                            @endforeach
											
										</ul>
									</div>
								</div>
							</div>
							<div class="hp-section">
								<div class="hp-sub-tit">
									<h4><span>Ratings</span> Suite Room</h4>
									<p>Aliquam id tempor sem. Cras molestie risus et lobortis congue. Donec id est consectetur, cursus tellus at, mattis lacus.</p>
								</div>
								<div class="hp-review">
									<div class="hp-review-left">
										<div class="hp-review-left-1">
											<div class="hp-review-left-11">Excellent</div>
											<div class="hp-review-left-12">
												<div class="hp-review-left-13"></div>
											</div>
										</div>
										<div class="hp-review-left-1">
											<div class="hp-review-left-11">Good</div>
											<div class="hp-review-left-12">
												<div class="hp-review-left-13 hp-review-left-Good"></div>
											</div>
										</div>
										<div class="hp-review-left-1">
											<div class="hp-review-left-11">Satisfactory</div>
											<div class="hp-review-left-12">
												<div class="hp-review-left-13 hp-review-left-satis"></div>
											</div>
										</div>
										<div class="hp-review-left-1">
											<div class="hp-review-left-11">Below Average</div>
											<div class="hp-review-left-12">
												<div class="hp-review-left-13 hp-review-left-below"></div>
											</div>
										</div>
										<div class="hp-review-left-1">
											<div class="hp-review-left-11">Below Average</div>
											<div class="hp-review-left-12">
												<div class="hp-review-left-13 hp-review-left-poor"></div>
											</div>
										</div>
									</div>
									<div class="hp-review-right">
										<h5>Overall Ratings</h5>
										<p><span>4.5 <i class="fa fa-star" aria-hidden="true"></i></span> based on 242 reviews</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-4">
						<!--=========================================-->
						<div class="hp-call hp-right-com">
							<div class="hp-call-in"> <img src="{{asset('assets/images/icon/dbc4.png')}}" alt="">
								<h3><span>Check Availability. Call us!</span> +62 823 7710 2513</h3> <small>We are available 24/7 Monday to Sunday</small>  </div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
@endsection
