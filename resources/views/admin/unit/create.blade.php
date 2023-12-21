@extends('dashboard.layouts.main')
@section('container')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card p-3 mb-4">
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

                    <div class="card-header pb-0">
                        <h6>Tambah Unit</h6>
                    </div>
                    <div class="card-body p-3 pt-0 pb-2">
                        <form method="post" action="{{ route('unit.store') }}">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="mb-3">
                                    <label for="nama_unit" class="form-label">Nama Unit</label>
                                    <input type="text" class="form-control" name="nama_unit" id="nama_unit"
                                        placeholder="Luxury A 3A">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi_unit" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi_unit" id="deskripsi_unit" rows="3" placeholder="Masukkan deskripsi"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-dark" type="submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection
