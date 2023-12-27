@extends('dashboard.layouts.main')
@section('container')
  <div class="main-content position-relative max-height-vh-100 h-100">
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-header pb-0">
                <a href="{{ Route('refund.historyuser') }}" class="btn btn-dark">Kembali</a>
              <div class="d-flex align-items-center">
                <p class="mb-0 text-lg">Riwayat Pesanan 2023122300001 (23 Desember 2023)</p>
                @if ($order->status == '2' && $refund->status == 'waiting')
                  <button class="btn btn-primary btn-sm ms-auto"  data-bs-toggle="modal" data-bs-target="#modalStoreRefund">Persetujuan Refund</button>
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
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">% Pengembalian</label>
                    <input class="form-control" type="text" readonly value="{{ $refund->percent_refund == NULL ? 'BELUM DITENTUKAN' : $refund->percent_refund.'%'  }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Total Pengembalian</label>
                    <input class="form-control" type="text" readonly value="{{ $refund->status == 'waiting' ? 'BELUM DITENTUKAN' : 'Rp '.number_format($refund->amount, 0, ',', '.') }}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Alasan Pengajuan Refund</label>
                    <textarea class="form-control" disabled >{{ $refund->reason }}</textarea>
                  </div>
                </div>
                @if($refund->status != 'waiting')
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Alasan Terkait Status Refund yang diberikan</label>
                        <textarea class="form-control" disabled >{{ $refund->reason_admin }}</textarea>
                    </div>
                    </div>
                @endif
              </div>
              <p class="text-uppercase text-lg text-dark">
                TOTAL HARGA : <strong>{{ 'Rp '.number_format($order->total_price, 0, ',', '.') }}</strong>
              </p>
              <hr class="horizontal dark">
              <p class="text-uppercase text-lg text-dark">
                Status REFUND : {!! $statusRefundTranslate[$refund->status] !!}
              </p>
            </div>
          </div>
        </div>
        
      </div>
     
    </div>
  </div>
  @if ($order->status == '2' && $refund->status == 'waiting')
      <div class="modal fade" id="modalStoreRefund" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pengajuan Refund</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="d-inline" action="{{ route('refund.agreement', $refund->id) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="status" class="col-form-label">Status:</label>
                            <select class="form-select" name='status'>
                              <option value="">-- Pilih Status --</option>
                              <option value="accept">Diterima</option>
                              <option value="reject">Ditolak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="percent_refund" class="col-form-label">Persen Pengembalian:</label>
                            <input type="number" class="form-control" name="percent_refund">
                        </div>
                        <div class="mb-3">
                            <label for="reason_admin" class="col-form-label">Alasan:</label>
                            <textarea class="form-control" name="reason_admin"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Tambah</button>
                </div>
                </form>
            </div>
        </div>
      </div>
  @endif
@endsection