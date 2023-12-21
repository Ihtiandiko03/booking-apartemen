@extends('dashboard.layouts.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card p-3 mb-4">
                    <a href="/advertisement" class="btn btn-dark">Kembali</a>
                    <img class="rounded mx-auto d-block" src="{{ asset('storage/'.$advertisement['banner']) }}" width="200" alt="{{$advertisement['banner']}}">
                </div>
            </div>
        </div>
    </div>
@endsection