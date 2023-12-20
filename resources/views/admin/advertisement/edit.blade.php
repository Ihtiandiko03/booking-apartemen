@extends('dashboard.layouts.main')
@section('container')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card p-3 mb-4">
                    <div class="card-header pb-0">
                        <h6>Edit Iklan</h6>
                    </div>
                    <div class="card-body p-3 pt-0 pb-2">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <div class="alert-title">
                                    <h4>Whoops!</h4>
                                </div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{ route('advertisement.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Promo Bulan Ramadhan" value="{{$advertisement['title']}}">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Masukkan konten">{{$advertisement['description']}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="banner" class="form-label">Banner Iklan (WAJIB UPLOAD ULANG GAMBAR)</label>
                                    <input class="form-control" type="file" id="banner" name="banner">
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
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
