@extends('layouts.main')
@section('container')
		<!--TOP SECTION-->
		<!--END HOTEL ROOMS-->
		<!--CHECK AVAILABILITY FORM-->
		
		<!--END CHECK AVAILABILITY FORM-->
		<div class="hom-com">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
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
									<h4><span>Information</span> Account</h4>
								</div>
								<div class="hp-over">
									<form class="row g-3">
                                        <div class="col-md-6">
                                          <label for="inputEmail4" class="form-label" style="margin-top:10px; color: #2a2b33 ;font-size: 9pt;">Name</label>
                                          <input type="text" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6">
                                          <label for="inputPassword4" class="form-label" style="margin-top:10px; color: #2a2b33 ;font-size: 9pt;">Number Phone</label>
                                          <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                        
                                        <div class="col-md-6">
                                          <label for="inputCity" class="form-label" style="margin-top:10px; color: #2a2b33 ;font-size: 9pt;">City</label>
                                          <input type="text" class="form-control" id="inputCity">
                                        </div>
                                    
                                        <div class="col-md-2">
                                          <label for="inputZip" class="form-label" style="margin-top:10px; color: #2a2b33 ;font-size: 9pt;">Zip</label>
                                          <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        
                                    </div>
                                </div>
                                <button class="btn btn-danger">Lanjutkan</button>    
                                </form>
							
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="hp-call hp-right-com">
							<div class="hp-call-in">
								<h1>Preview</h1>
                                <img style="" src="{{asset('storage/'.$gallery[0]["image"])}}">
								<h4>2BR Apartment with Private Lift at Menteng Park</h4> 

                                <div class="row g-2">
                                    <div class="col-xs-6">
                                        <h5>Check - In</h5>
                                        <p>23-12-2023</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <h5>Check - Out</h5>
                                        <p>23-12-2023</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <h5>Tipe</h5>
                                        <h5>Durasi</h5>
                                        <h5>Price</h5>
                                        <h5>Deposit</h5>
                                    </div>
                                    <div class="col-xs-6">
                                        <h6>Bulanan</h6>
                                        <h6>3 Bulan</h6>
                                        <h6>Rp5.000.000</h6>
                                        <h6>Rp2.500.000</h6>
                                    </div>
                                </div>

								{{-- <ul class="nav nav-tabs" role="tablist">
									<li data-tab="Daily" class="active">
										<a style="font-size: 6pt;" id="daily-tab" href="#daily" class="tab-control" aria-controls="daily" role="tab" data-toggle="tab" aria-expanded="true">Harian</a>
									</li>
									<li data-tab="Week">
										<a style="font-size: 6pt;" id="week-tab" href="#week" class="tab-control" aria-controls="week" role="tab" data-toggle="tab" aria-expanded="false">Mingguan</a>
									</li>
									<li data-tab="Monthly">
										<a style="font-size: 6pt;" id="monthly-tab" href="#monthly" class="tab-control" aria-controls="monthly" role="tab" data-toggle="tab" aria-expanded="false">Bulanan</a>
									</li>
									<li data-tab="Yearly">
										<a style="font-size: 6pt;" id="yearly-tab" href="#yearly" class="tab-control" aria-controls="yearly" role="tab" data-toggle="tab">Tahunan</a>
									</li>
								</ul> --}}
								
								<br>
								<h3 style="color: #8a6e35">Total price Rp5.000.000</h3>
								{{-- <button class="btn btn-danger">Booking</button> --}}

								<h5 style="text-align: left;">Info Penting : </h5>
								<p style="text-align: justify;">Deposit dibayarkan saat pemesan datang ke apartemen. Untuk pemesanan harian, deposit menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi. Pemberitahuan akan dikirimkan ke email Anda setelah berhasil (pastikan contact detail yang terdaftar aktif).</p>


								

								{{-- <select class="form-select" aria-label="Default select example">
									<option selected>Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								  </select> --}}

								

							</div>
						</div>
					</div>

					
					
				</div>
			</div>
		</div>
@endsection
