@extends('dashboard.layouts.main')
@section('container')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    @if ($errors->any())
                    <div class="alert alert-danger text-white">
                        <div class="alert-title">
                            <h4 class="text-white">Whoops!</h4>
                        </div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="card-header">
                        <h6>Detail Unit</h6>
                    </div>
                    <div class="card-body p-3 pb-2">
                        <table class="table table-borderless">
                            <tr>
                                <th>Nama Unit</th>
                                <th> : </th>
                                <th>{{ $unit->nama_unit }}</th>
                            </tr>
                            <tr>
                                <th>Deskripsi Unit</th>
                                <th> : </th>
                                <th>{{ $unit->deskripsi_unit }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card p-3 mb-4">
                    <div class="card-header">
                        <h6>Harga Unit</h6>
                    </div>
                    <div class="card-body p-3 py-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Harga</th>
                                <th>Tipe</th>
                                <th>Aksi</th>
                            </tr>
                            @forelse ($price as $p)
                                <tr>
                                    <td>{{ $p->type }}</td>
                                    <td>{{ $p->price }}</td>
                                    <td>Tombol Aksi</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="3"> Data Kosong </td>    
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card p-3 mb-4">
                    <div class="card-header">
                        <h6>Fasilitas Unit</h6>
                    </div>
                    <div class="card-body p-3 py-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Jenis Fasilitas</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                            @forelse ($facility as $f)
                                <tr>
                                    <td>{{ $f->type }}</td>
                                    <td>{{ $f->detail }}</td>
                                    <td>Tombol Aksi</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="3"> Data Kosong </td>    
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card p-3 mb-4">
                    <div class="card-header">
                        <h6>Galeri Unit</h6>
                    </div>
                    <div class="card-body p-3 py-2">
                        <table class="table table-bordered">
                            <tr>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                            @forelse ($gallery as $g)
                                <tr>
                                    <td>{{ $g->image }}</td>
                                    <td>Tombol Aksi</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="2"> Data Kosong </td>    
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection
