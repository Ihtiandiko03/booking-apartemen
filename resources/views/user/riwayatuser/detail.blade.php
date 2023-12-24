@extends('dashboard.layouts.main')
@section('container')
  <div class="main-content position-relative max-height-vh-100 h-100">
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-header pb-0">
                <a href="{{ Route('order.history') }}" class="btn btn-dark">Kembali</a>
              <div class="d-flex align-items-center">
                <p class="mb-0 text-lg">Riwayat Pesanan <strong>{{ $order->invoice_code }}</strong> ({{ date('d M Y', strtotime($order->created_at)) }})</p>
                @if ($order->status == '1')
                  <button class="btn btn-primary ms-auto" id="pay-button">BAYAR</button>
                @endif
                
                @if ($order->status == '2')
                  <button class="btn btn-primary btn-sm ms-auto">Ajukan Refund</button>
                @endif
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">Contact Information</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama User</label>
                    <input class="form-control" type="text" readonly value="{{ $user->name }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Pemesan Atas Nama</label>
                    <input class="form-control" type="text" readonly value="{{ $order->customer_name }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email address</label>
                    <input class="form-control" type="email" readonly value="{{ $user->email }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nomor Telepon</label>
                    <input class="form-control" type="text" readonly value="{{ $order->phone }}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Order Information</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama Unit</label>
                    <input class="form-control" type="text" readonly value="{{ $order->unit_name_snapshot }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Durasi</label>
                    <input class="form-control" type="text" readonly value="{{ $order->qty.' '.$typeTranslate[$order->type] }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Tanggal Check - In</label>
                    <input class="form-control" type="text" readonly value="{{ date('d M Y', strtotime($order->start_date)) }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Tanggal Check - Out</label>
                    <input class="form-control" type="text" readonly value="{{ date('d M Y', strtotime($order->end_date)) }}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-lg text-dark">
                Status Pemesanan : {!! $statusTranslate[$order->status] !!}
              </p>
            </div>
          </div>
        </div>
        
      </div>
     
    </div>
  </div>
@endsection

@section('script')
  @if ($order->status == '1')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.clientKey') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function(){
          // SnapToken acquired from previous step
          snap.pay('{{ $order->snap_token }}', {
            // Optional
            onSuccess: function(result){
              /* You may add your own js here, this is just example */
              location.reload();
            },
            // Optional
            onPending: function(result){
              /* You may add your own js here, this is just example */ 
              location.reload();
            },
            // Optional
            onError: function(result){
              /* You may add your own js here, this is just example */ 
              location.reload();
            }
          });
        };
    </script>
  @endif
@endsection
