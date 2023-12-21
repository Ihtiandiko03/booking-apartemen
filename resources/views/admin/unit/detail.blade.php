@extends('dashboard.layouts.main')
@section('container')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
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
                <div class="card mb-4">
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
                                <th class="text-center">Tipe</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            <tr>
                                <td class="text-center">Harian</td>
                                <td class="text-center">
                                    {{ $priceDay != 0 ? 'Rp' . number_format($priceDay) : 'Belum Disetel' }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPrice"
                                            data-bs-type="Harian" data-bs-type-value="day"
                                            data-bs-price="{{ $priceDay }}">
                                            Ubah
                                        </button>
                                        @if ($priceDay != 0)
                                            <form
                                                action="{{ route('price.destroy', ['unitId' => $unit->id, 'type' => 'day']) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class='btn btn-danger'>NonAktif</button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Mingguan</td>
                                <td class="text-center">{{ $priceWeek != 0 ? $priceWeek : 'Belum Disetel' }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPrice"
                                            data-bs-type="Mingguan" data-bs-type-value="week"
                                            data-bs-price="{{ $priceWeek }}">
                                            Ubah
                                        </button>
                                        @if ($priceWeek != 0)
                                            <form
                                                action="{{ route('price.destroy', ['unitId' => $unit->id, 'type' => 'week']) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class='btn btn-danger'>NonAktif</button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Bulanan</td>
                                <td class="text-center">{{ $priceMonth != 0 ? $priceMonth : 'Belum Disetel' }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPrice"
                                            data-bs-type="Bulanan" data-bs-type-value="month"
                                            data-bs-price="{{ $priceMonth }}">
                                            Ubah
                                        </button>
                                        @if ($priceMonth != 0)
                                            <form
                                                action="{{ route('price.destroy', ['unitId' => $unit->id, 'type' => 'month']) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class='btn btn-danger'>NonAktif</button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Tahunan</td>
                                <td class="text-center">{{ $priceYear != 0 ? $priceYear : 'Belum Disetel' }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPrice"
                                            data-bs-type="Tahunan" data-bs-type-value="year"
                                            data-bs-price="{{ $priceYear }}">
                                            Ubah
                                        </button>
                                        @if ($priceYear != 0)
                                            <form
                                                action="{{ route('price.destroy', ['unitId' => $unit->id, 'type' => 'year']) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class='btn btn-danger'>NonAktif</button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card p-3 mb-4">
                    <div class="card-header d-flex justify-content-between">
                        <h6>Fasilitas Unit</h6>
                        <button class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#modalStoreFacility">Tambah</button>
                    </div>
                    <div class="card-body p-3 py-2">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Jenis Fasilitas</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($facility as $f)
                                    <tr>
                                        <td class="text-center">{{ $f->type }}</td>
                                        <td class="text-center">{{ $f->detail }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-id="{{ $f->id }}" data-bs-target="#modalUpdateFacility"
                                                    data-bs-type="{{ $f->type }}"
                                                    data-bs-detail="{{ $f->detail }}">Ubah</button>
                                                <form action="{{ route('facility.destroy', $f->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="3"> Data Kosong </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card p-3 mb-4">
                    <div class="card-header d-flex justify-content-between align-middle">
                        <h6>Galeri Unit</h6>
                        <button class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#modalStoreGallery">Tambah</button>
                    </div>
                    <div class="card-body p-3 py-2">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Thumbnail</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            @forelse ($gallery as $g)
                                <tr>
                                    <td class="text-center"><img class="img-thumbnail" height="150" width="150"
                                            src="{{ asset('storage/' . $g->image) }}"></td>
                                    <td class="text-center">
                                        @if ($g->is_thumbnail == 1)
                                            <span class="badge bg-success">Ya</span>
                                        @else
                                            <span class="badge bg-danger">Bukan</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($g->is_thumbnail == 1)
                                        @else
                                            <form action="{{ route('gallery.thumbnail', $g->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Jadikan Thumbnail</button>
                                            </form>
                                        @endif
                                    </td>
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
    <div class="modal fade" id="modalPrice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title-price fs-5" id="exampleModalLabel">Harga</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ Route('price.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="unit_id" value="{{ $unit->id }}">
                        <input type="hidden" name="type" id="type-price">
                        <div class="mb-3">
                            <label for="type-display" class="col-form-label">Tipe:</label>
                            <input type="text" class="form-control" id="type-display" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="col-form-label">Harga:</label>
                            <input class="form-control" name="price" id="price" type="number"></input>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalStoreFacility" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Fasilitas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('facility.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="unit_id" value="{{ $unit->id }}">
                        <div class="mb-3">
                            <label for="type" class="col-form-label">Jenis:</label>
                            <input type="text" class="form-control" name="type" placeholder="Kamar Tidur">
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="col-form-label">Detail:</label>
                            <input class="form-control" name="detail" type="text" placeholder="2"></input>
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

    <div class="modal fade" id="modalUpdateFacility" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Fasilitas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-update-facility" method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" name="unit_id" value="{{ $unit->id }}">
                        <div class="mb-3">
                            <label for="type" class="col-form-label">Jenis:</label>
                            <input type="text" class="form-control" name="type" id="update-type-facility"
                                placeholder="Kamar Tidur" />
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="col-form-label">Detail:</label>
                            <input class="form-control" name="detail" type="text" id="update-detail-facility"
                                placeholder="2" />
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

    <div class="modal fade" id="modalStoreGallery" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Gambar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="unit_id" value="{{ $unit->id }}">
                        <div class="mb-3">
                            <label for="image" class="col-form-label">Gambar:</label>
                            <input type="file" class="form-control" name="image">
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
@endsection

@section('script')
    <script>
        const modalPrice = document.getElementById('modalPrice')
        modalPrice.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget
            const typeDisplay = button.getAttribute('data-bs-type')
            const type = button.getAttribute('data-bs-type-value')
            const price = button.getAttribute('data-bs-price')

            const modalTitle = modalPrice.querySelector('.modal-title-price')
            const modalBodyInputType = modalPrice.querySelector('.modal-body input#type-display')
            const modalBodyInputTypeValue = modalPrice.querySelector('.modal-body input#type-price')
            const modalBodyInputPrice = modalPrice.querySelector('.modal-body input#price')

            modalTitle.textContent = `Harga Tipe ${typeDisplay}`
            modalBodyInputType.value = typeDisplay
            modalBodyInputTypeValue.value = type
            modalBodyInputPrice.value = price
        })
    </script>

    <script>
        const modalUpdateFacility = document.getElementById('modalUpdateFacility')
        modalUpdateFacility.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget
            const idFacility = button.getAttribute('data-bs-id')
            const typeFacility = button.getAttribute('data-bs-type')
            const detailFacility = button.getAttribute('data-bs-detail')

            const modalBodyInputType = modalUpdateFacility.querySelector('.modal-body input#update-type-facility')
            const modalBodyInputDetail = modalUpdateFacility.querySelector(
                '.modal-body input#update-detail-facility')

            modalBodyInputType.value = typeFacility
            modalBodyInputDetail.value = detailFacility

            const formAction = document.getElementById('form-update-facility')
            formAction.action = "/facility/" + idFacility

        })
    </script>
@endsection
