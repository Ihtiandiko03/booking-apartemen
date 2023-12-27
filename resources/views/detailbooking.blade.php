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
							<div class="hp-section">
								<div class="hp-sub-tit">
									<h4><span>Detail</span> Order</h4>
								</div>
								<div class="hp-over">
									{{-- <img class="img-thumbnail" height="100px" src="{{ asset('assets/images/no-photo-apartemen.jpg') }}"> --}}
									<div class="head-typo typo-com">
										<h4>{{ $order->unit_name_snapshot }}</h4> 
		
										<div class="row g-2">
											<div class="col-xs-6">
												<h5>Check - In</h5>
												<p>{{ $order->start_date }}</p>
											</div>
											<div class="col-xs-6">
												<h5>Check - Out</h5>
												<p>{{ $order->end_date }}</p>
											</div>
											<div class="col-xs-6">
												<h5>Tipe</h5>
												<h5>Durasi</h5>
												<h5>Harga/{{ $order->type }}</h5>
											</div>
											<div class="col-xs-6">
												<h5>
													@if($order->type == 'day')
														Harian
													@elseif($order->type == 'week')
														Mingguan	
													@elseif($order->type == 'month')
														Bulanan
													@elseif($order->type == 'year')
														Tahunan
													@else
														-
													@endif
												</h5>
												<h5>{{ $order->qty.' '.ucfirst($order->type) }}</h5>
												<h5>{{ 'Rp '.number_format($order->price, 0, ',', '.') }}</h5>
											</div>
										</div>
										
										<h3 style="color: #8a6e35">{{ 'Total Harga Rp '.number_format($order->total_price, 0, ',', '.') }} </h3>
                                        <p class="text-danger">*Harga belum termasuk deposit</p>
											
										<button class="btn btn-danger w-100" id="pay-button">Bayar</button>
											
									</div>
                                </div>
                            </div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="hp-call hp-right-com">
							<div class="hp-call-in">
								<h1 class="text-center">Info Penting : </h1>
								<p style="text-align: justify;">Deposit dibayarkan saat pemesan datang ke apartemen. Untuk pemesanan harian, deposit menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi. Pemberitahuan akan dikirimkan ke email Anda setelah berhasil (pastikan contact detail yang terdaftar aktif).</p>
								<pre><div id="result-json">JSON result will appear here after payment:<br></div></pre> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection

@section('script')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.clientKey') }}"></script>
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        // SnapToken acquired from previous step
        snap.pay('{{ $snapToken }}', {
          // Optional
          onSuccess: function(result){
            /* You may add your own js here, this is just example */
			// window.location.replace("{{ url('/order/history/'.$order->invoice_code) }}");
			document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onPending: function(result){
            /* You may add your own js here, this is just example */ 
			// window.location.replace("{{ url('/order/history/'.$order->invoice_code) }}");
			document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onError: function(result){
            /* You may add your own js here, this is just example */ 
			// window.location.replace("{{ url('/order/history/'.$order->invoice_code) }}");
			document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
      };
    </script>
@endsection
