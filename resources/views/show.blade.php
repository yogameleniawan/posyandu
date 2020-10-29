@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-md-6">
      <h1 class="h3 mb-2 text-gray-800">Detail Bayi</h1>
      <p class="mb-4">Informasi dan pertumbuhan bayi</p>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
      <a href="{{ $baby->id }}/progress" class="btn btn-info shadow-sm align-self-center mt-n3">Pertumbuhan Bayi</a>
    </div>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow-sm mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col">
          <h6 class="m-0 font-weight-bold text-primary">Informasi Pribadi</h6>
        </div>
        <div class="col text-right">
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow-sm animated--fade-in" aria-labelledby="dropdownMenuLink">
               <div class="dropdown-header">Opsi:</div>
               <a class="dropdown-item" href="{{ url('/baby/'.$baby->id.'/export') }}">Export ke Excel</a>
            </div>
         </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="row container-fluid">
        {{-- <div class="col-lg-6">
          <h5><strong>ID Bayi</strong></h5>
          <p>XXXX</p>
        </div> --}}
        <div class="col-lg-4">
          <h5><strong>Nama Bayi</strong></h5>
          <p>{{ $baby->nama }}</p>
        </div>
        <div class="col-lg-4">
          <h5><strong>Nama Ibu</strong></h5>
            <p>{{ $baby->nama_ibu }}</p>
          </div>
          <div class="col-lg-4">
            <h5><strong>Nama Ayah</strong></h5>
            <p>{{ $baby->nama_ayah }}</p>
          </div>
          <div class="col-lg-4">
            <h5><strong>Tempat Lahir</strong></h5>
            <p>{{ $baby->tempat_lahir }}</p>
          </div>
          <div class="col-lg-4">
            <h5><strong>Tanggal Lahir</strong></h5>
            <p>{{ date('d/m/Y | H:i', $baby->tanggal_lahir) }}</p>
          </div>
          <div class="col-lg-4">
            <h5><strong>Usia</strong></h5>
            <p>{{ $umur }}</p>
          </div>
          <div class="col-lg-4">
            <h5><strong>Jenis Kelamin</strong></h5>
            <p>{{ $jenis_kelamin }}</p>
          </div>
          <div class="col-lg-4">
            <h5><strong>Anak Ke</strong></h5>
            <p>{{ $baby->anak_ke }}</p>
          </div>
          <div class="col-lg-4">
            <h5><strong>Alamat Lengkap</strong></h5>
            <p>{{ $baby->alamat }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card shadow-sm mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Informasi Kesehatan</h6>
      </div>
      <div class="card-body">
        <div class="row container-fluid">
          <div class="col-lg-4">
            <h5><strong>Golongan Darah</strong></h5>
            @if($baby->golongan_darah == "BT")
            <p>Belum Tahu</p>
            @else
            <p>{{ $baby->golongan_darah }}</p>
            @endif
          </div>
          <div class="col-lg-4">
            <h5><strong>Tinggi Lahir</strong></h5>
            <p>{{ $baby->panjang_bayi }} cm</p>
          </div>
          <div class="col-lg-4">
            <h5><strong>Berat Lahir</strong></h5>
            <p>{{ $baby->berat_bayi }} kg</p>
          </div>
          <div class="col-lg-4">
            <h5><strong>Tinggi Sekarang</strong></h5>
            <p>{{ $panjang_sekarang }} cm</p>
          </div>
          <div class="col-lg-4">
            <h5><strong>Berat Sekarang</strong></h5>
            <div class="row">
              <div class="col-4">

                <p>{{ $berat_sekarang }} kg</p>
              </div>
              <div class="col">

                {{-- <span class="badge badge-danger">Terlalu Gemuk</span> --}}
              </div>
            </div>
          </div>
          {{-- <div class="col-lg-4">
              <h5><strong>Status Berat</strong></h5>
              <p class="alert alert-danger">Terlalu Kurus</p>
          </div> --}}
        </div>
      </div>
    </div>
  <div class="mb-5">
    <a href="{{ url('/baby') }}" class="text-decoration-none mx-1">Kembali</a>
    @if(session()->get('role') == 'Staff2' || session()->get('role') == 'Staff')
      <a href="{{ url('/baby').'/'.$baby->id.'/edit' }}" class="btn btn-warning mx-1">Edit</a>
    @endif
    <form action="{{ $baby->id }}" method="post" class="d-inline">
      @method('delete')
      @csrf      
      <button class="btn btn-danger mx-1" type="submit">Hapus</button>
    </form>
  </div>
</div>
<!-- /.container-fluid -->
@endsection