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
                        <h6>Edit FAQ</h6>
                    </div>
                    <div class="card-body p-3 pt-0 pb-2">
                        <form method="post" action="{{ route('faq.store') }}">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="mb-3">
                                    <label for="question" class="form-label">Question</label>
                                    <textarea class="form-control" name="question" id="question" rows="3" placeholder="Masukkan pertanyaan">{{ $faq['question'] }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="answer" class="form-label">Answer</label>
                                    <textarea class="form-control" name="answer" id="answer" rows="3" placeholder="Masukkan jawaban">{{ $faq['answer'] }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="answer" class="form-label">Order</label>
                                    <input type="number" class="form-control" name="order" id="order" placeholder="Masukkan urutan" value="{{ $faq['order'] }}">
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
