@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container">

  <!-- Page Heading -->
  <div class="row">
    <div class="col">

      <h1 class="h3 mb-2 text-gray-800">Data Bayi</h1>
      <p class="mb-4">Pengelolaan data bayi</p>
    </div>
    <div class="col text-right">
      <a href="{{ url('/baby/create') }}" class="btn btn-primary my-3 shadow-sm">Tambah Data</a>
    </div>
  </div>

  @if(session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
  @endif
  @if(session('danger'))
  <div class="alert alert-danger">
    {{session('danger')}}
  </div>
  @endif

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Data Bayi</h6>
      <div class="dropdown no-arrow">
         <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-right shadow-sm animated--fade-in" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Opsi:</div>
            <a class="dropdown-item" href="{{ url('/baby/export') }}">Export ke Excel</a>
         </div>
      </div>
   </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>NO</th>
              <th>Nama Bayi</th>
              <th>Nama Ibu</th>
              <th>Nama Ayah</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>NO</th>
              <th>Nama Bayi</th>
              <th>Nama Ibu</th>
              <th>Nama Ayah</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($babies as $baby)
            <tr class="text-center">
              <td>{{ $loop->iteration }}</td>
              <td>{{ $baby->nama }}</td>
              <td>{{ $baby->nama_ibu }}</td>
              <td>{{ $baby->nama_ayah }}</td>
              <td>
                <a href="{{ url('/baby').'/'.$baby->id }}" class="btn-sm btn-info text-decoration-none">Detail</a>
                {{-- <a href="#" class="btn-sm btn-warning rounded-circle"><img class="mt-n1" src="img/edit.svg"></a>
                <a href="#" class="btn-sm btn-danger rounded-circle"><img class="mt-n1" src="img/delete.svg"></a> --}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection