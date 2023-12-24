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
                        <h6>Setting App</h6>
                    </div>
                    <div class="card-body p-3 pt-0 pb-2">
                        <form method="post" action="{{ route('setting.post') }}">
                            @csrf
                            @method('post')
                            <input type="hidden" name="id" value="{{ $setting->id }}">
                            <div class="row">
                                <div class="mb-3">
                                    <label for="app_name" class="form-label">Nama Aplikasi</label>
                                    <input type="text" class="form-control" name="app_name" value="{{ $setting->app_name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $setting->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $setting->phone}}">
                                </div>
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{ $setting->facebook }}">
                                </div>
                                <div class="mb-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{ $setting->twitter }}">
                                </div>
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{ $setting->instagram }}">
                                </div>
                                <div class="mb-3">
                                    <label for="maps" class="form-label">Maps</label>
                                    <input type="text" class="form-control" name="maps" value="{{ $setting->maps }}">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea class="form-control" name="address" rows="3">{{ $setting->address }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="about" class="form-label">Tentang</label>
                                    <textarea class="form-control" name="about" rows="3">{{ $setting->about }}</textarea>
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
