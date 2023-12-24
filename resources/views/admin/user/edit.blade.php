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
                        <h6>Edit User {{ $user->name }}</h6>
                    </div>
                    <div class="card-body p-3 pt-0 pb-2">
                        <form method="post" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Masukkan Nama" value="{{ $user->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Masukkan Email" value="{{ $user->email }}">
                                </div>

                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-select" name="role" id="role">
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                        <option value="marketing" {{ $user->role == 'marketing' ? 'selected' : '' }}>Marketing</option>
                                        <option value="penjaga" {{ $user->role == 'penjaga' ? 'selected' : '' }}>Penjaga</option>
                                    </select>
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
