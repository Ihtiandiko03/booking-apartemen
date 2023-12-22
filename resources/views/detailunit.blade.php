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
										<h1 class="text-center" style="color: white">{{$unit->nama_unit}}</h1>
									</div>
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
							{{-- <div class="hp-section">
								<div class="hp-sub-tit">
									<h4><span>{{$unit->nama_unit}}</span></h4>
								</div>
								<div class="hp-amini">
									<p>{{$unit->deskripsi_unit}}</p>
								</div>
							</div> --}}
							
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
						<div class="hp-call hp-right-com">
							<div class="hp-call-in">
								<h1>Price</h1>
								<h3>Rp5.000.000</h3> 
								<small class="mb-3">We are available 24/7 Monday to Sunday</small> <br><br>

								<ul class="nav nav-tabs" role="tablist">
									<li data-tab="Daily" class="active">
										<a style="font-size: 6.5pt;" id="daily-tab" href="#daily" class="tab-control" aria-controls="daily" role="tab" data-toggle="tab" aria-expanded="true">Harian</a>
									</li>
									<li data-tab="Week">
										<a style="font-size: 6.5pt;" id="week-tab" href="#week" class="tab-control" aria-controls="week" role="tab" data-toggle="tab" aria-expanded="false">Mingguan</a>
									</li>
									<li data-tab="Monthly">
										<a style="font-size: 6.5pt;" id="monthly-tab" href="#monthly" class="tab-control" aria-controls="monthly" role="tab" data-toggle="tab" aria-expanded="false">Bulanan</a>
									</li>
									<li data-tab="Yearly">
										<a style="font-size: 6.5pt;" id="yearly-tab" href="#yearly" class="tab-control" aria-controls="yearly" role="tab" data-toggle="tab">Tahunan</a>
									</li>
								</ul>
								
								<br>

								<div class="row g-3">
									<div class="col-xs-6">
										<div>Check - In</div>
											<input type="date" class="form-control" placeholder="Check-in" >
										</div>
									<div class="col-xs-6">
										<div>Check - Out</div>
											<input type="date" class="form-control"  placeholder="Check-out">
									</div>

									<div class="col-xs-12">
										<br>
										<div>Durasi</div>
										<select id="months" class="form-select" name="months">
											<option value="1" selected="selected">1 bulan</option>
											<option value="2">2 bulan</option>
											<option value="3">3 bulan</option>
											<option value="4">4 bulan</option>
											<option value="5">5 bulan</option>
											<option value="6">6 bulan</option>
											<option value="7">7 bulan</option>
											<option value="8">8 bulan</option>
											<option value="9">9 bulan</option>
											<option value="10">10 bulan</option>
											<option value="11">11 bulan</option>
											<option value="12">12 bulan</option>
										</select>
									</div>

									
								</div>
								<br>
								<h3 style="color: #8a6e35">Total Rp5.000.000</h3> 
								<button class="btn btn-danger">Booking</button>

								<h5 style="text-align: left;">Info Penting : </h5>
								<p style="text-align: justify;">Untuk pemesanan harian, deposit menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi. Pemberitahuan akan dikirimkan ke email Anda setelah berhasil (pastikan contact detail yang terdaftar aktif).</p>


								

								{{-- <select class="form-select" aria-label="Default select example">
									<option selected>Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								  </select> --}}

								

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
