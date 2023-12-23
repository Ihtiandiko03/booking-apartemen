@extends('dashboard.layouts.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card p-3 mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between">
                        <h6>Daftar Riwayat Pesanan Unit</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0" id="faqTable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nomor Transaksi</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tanggal Pemesanan</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nama Unit</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Aksi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Refund</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2023122300001</td>
                                        <td>23 Desember 2023</td>
                                        <td>Master Room</td>
                                        <td class="justify-content-center">
                                                <a class="btn btn-primary" href="/lihatriwayatadmin">
                                                    Lihat
                                                </a>
                                                <a class="btn btn-dark" href="/cetakresiadmin">
                                                    Cetak Resi
                                                </a>
                                                
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="#">
                                                Terima Refund
                                            </a>
                                            <a class="btn btn-danger" href="#">
                                                Tolak Refund
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
