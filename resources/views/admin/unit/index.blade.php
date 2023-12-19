@extends('dashboard.layouts.main')
@section('container')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card p-3 mb-4">
          <div class="card-header pb-0 d-flex justify-content-between">
            <h6>Daftar Unit</h6>
            <a href="{{ Route('unit.create') }}" class="btn btn-primary ms-auto">Tambah</a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0" id="unitTable">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#unitTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url()->current() }}',
                columns: [
                    { 
                        data: 'DT_RowIndex', 
                        name: 'DT_RowIndex', 
                        orderable: false, 
                        searchable: false,
                        width: '5%'
                    },
                    { 
                        data: 'nama_unit',
                        name: 'nama_unit',
                        orderable: true,
                        searchable: true,
                        width: '75%'
                    },
                    { 
                        data: 'action', 
                        name: 'action', 
                        orderable: false, 
                        searchable: false,
                        width: '20%'
                    }
                ]
            }); 
        });
    </script>
@endsection