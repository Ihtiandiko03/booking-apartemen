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
							<div class="hp-section">
								<div class="hp-sub-tit">
									<h4><span>{{$unit->nama_unit}}</span></h4>
									<p>Deskripsi</p>
								</div>
								<div class="hp-amini detai-2p">
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
                                                    <li>Price per day: <span>{{ $priceDay != null ? 'Rp '.number_format($priceDay, 0, ',', '.') : 'Tidak Ada' }}</span></li>
                                                    <li>Price per week: <span>{{ $priceWeek != null ? 'Rp '.number_format($priceWeek, 0, ',', '.') : 'Tidak Ada' }}</span></li>
                                                    <li>Price per month: <span>{{ $priceMonth != null ? 'Rp '.number_format($priceMonth, 0, ',', '.') : 'Tidak Ada' }}</span></li>
                                                    <li>Price per year: <span>{{ $priceYear != null ? 'Rp '.number_format($priceYear, 0, ',', '.') : 'Tidak Ada' }}</span></li>
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
								<h3 name="totalHarga" class="totalHarga">Rp 0</h3> 
								<small class="mb-3">We are available 24/7 Monday to Sunday</small> <br><br>

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
								<form action="{{ route('order.pay') }}" method="post" id="bookingForm">
									@csrf
								
									<input type="hidden" name="totalPrice" class="totalHarga">
									<input type="hidden" name="unit_id" value="{{ $unit->id }}">
									<div class="row g-3">
										<div class="col-xs-12">
											<br>
											<div>
												<label for="bookingType" style="font-size: 10pt; color:#2d2d2d">
													Tipe
												</label>
											</div>
											<select class="form-select" id="bookingType" name="bookingType" style="display: block">
												@if($priceDay != null )
													<option value="day">Harian</option>
												@endif
												@if ($priceWeek != null)
													<option value="week">Mingguan</option>
												@endif
												@if ($priceMonth != null)
													<option value="month">Bulanan</option>
												@endif
												@if ($priceYear != null)
													<option value="year">Tahunan</option>
												@endif
											</select>
										</div>

										<div class="col-xs-12">
											<br>
											<div>
												<label for="quantity" style="font-size: 10pt; color:#2d2d2d">Durasi</label>
											</div>
											<select class="form-select" id="quantity" name="quantity" style="display: block">
											</select>
										</div>

										<div class="col-xs-6">
											<br>
											<div>
												<label for="startDate" style="font-size: 10pt; color:#2d2d2d">
													Check - In
												</label>
											</div>
												<input type="date" class="form-control" min="{{ date('Y-m-d') }}" id="startDate" name="startDate" placeholder="Check-in" >
											</div>
										<div class="col-xs-6">
											<br>
											<div>
												<label for="endDate" style="font-size: 10pt; color:#2d2d2d">
													Check - Out
												</label>
											</div>
												<input type="date" class="form-control" id="endDate" name="endDate" readonly placeholder="Check-out">
										</div>


										
									</div>
									<br>
									<h3 id="totalHarga" class="totalHarga" name="totalHarga" style="color: #8a6e35">Rp 0</h3>
									<button class="btn btn-danger" type="submit">Booking</button>
									{{-- <a class="btn btn-danger" href="/detailbooking/{{$unit->slug}}">Booking</a> --}}
								</form>
								<h5 style="text-align: left;">Info Penting : </h5>
								<p style="text-align: justify;">Untuk pemesanan harian, deposit menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi. Pemberitahuan akan dikirimkan ke email Anda setelah berhasil (pastikan contact detail yang terdaftar aktif).</p>
							</div>
						</div>
					</div>

					{{-- <div class="col-md-4">
						<div class="hp-call hp-right-com">
							<div class="hp-call-in"> <img src="{{asset('assets/images/icon/dbc4.png')}}" alt="">
								<h3><span>Check Availability. Call us!</span> +62 823 7710 2513</h3> <small>We are available 24/7 Monday to Sunday</small>  </div>
						</div>
						
					</div> --}}
					
				</div>
			</div>
		</div>
@endsection

@section('script')
	<script>
		$(document).ready(function () {
            function updateQuantityOptions() {
                var bookingType = $('#bookingType').val();
                var quantitySelect = $('#quantity');
                quantitySelect.empty();  

                var maxQuantity;
                switch (bookingType) {
                    case 'day':
                        maxQuantity = 6;
                        break;
                    case 'week':
                        maxQuantity = 4;
                        break;
                    case 'month':
                        maxQuantity = 11;
                        break;
                    case 'year':
                        maxQuantity = 5;
                        break;
                    default:
                        maxQuantity = 1;
                        break;
                }

                for (var i = 1; i <= maxQuantity; i++) {
                    $('#quantity').append($('<option>', { value: i, text: i }));
                }
            }

            function resetQuantity() {
                $('#quantity').val(1); 
            }

            function updateEndDate() {
                var startDateValue = $('#startDate').val();

                if (!startDateValue) {
                    return;
                }

                var startDate = new Date(startDateValue);
                var endDate = $('#endDate');
                var quantity = parseInt($('#quantity').val(), 10);
                var bookingType = $('#bookingType').val();

                switch (bookingType) {
                    case 'day':
                        endDate.val(new Date(startDate.setDate(startDate.getDate() + quantity - 1)).toISOString().split('T')[0]);
                        break;
                    case 'week':
                        endDate.val(new Date(startDate.setDate(startDate.getDate() + quantity * 7 - 1)).toISOString().split('T')[0]);
                        break;
                    case 'month':
                        endDate.val(new Date(startDate.setMonth(startDate.getMonth() + quantity)).toISOString().split('T')[0]);
                        break;
                    case 'year':
                        endDate.val(new Date(startDate.setFullYear(startDate.getFullYear() + quantity) - 1).toISOString().split('T')[0]);
                        break;
                    default:
                        break;
                }
            }

            function updateTotalHarga() {
                var quantity = parseInt($('#quantity').val(), 10);
                var harga;

                switch ($('#bookingType').val()) {
                    case 'day':
                        harga = parseFloat({{ $priceDay ?? 0 }});
                        break;
                    case 'week':
                        harga = parseFloat({{ $priceWeek ?? 0 }});
                        break;
                    case 'month':
                        harga = parseFloat({{ $priceMonth ?? 0 }});
                        break;
                    case 'year':
                        harga = parseFloat({{ $priceYear ?? 0 }});
                        break;
                    default:
                        break;
                }

                var totalHarga = quantity * harga;
				$("input[name*='totalPrice']").val(totalHarga);
                $('.totalHarga').html(new Intl.NumberFormat('id-ID', {
					style: 'currency',
					currency: 'IDR',
				}).format(totalHarga));
            }

            updateQuantityOptions();
			updateTotalHarga();

            $('#bookingType, #startDate').on('change', function () {
                resetQuantity(); 
                updateEndDate();
                updateTotalHarga();
            });

            $('#bookingType').on('change', function () {
                updateQuantityOptions();
                resetQuantity();
                updateTotalHarga(); 
            });

            $('#quantity').on('change', function () {
                updateEndDate(); 
                updateTotalHarga();
            });

        });
	</script>
@endsection