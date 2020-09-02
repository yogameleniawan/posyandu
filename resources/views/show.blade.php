@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Detail Bayi</h1>
  <p class="mb-4">Informasi dan perkembangan bayi</p>

  <!-- DataTales Example -->
  <div class="card shadow-sm mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Informasi Pribadi</h6>
    </div>
    <div class="card-body">
      <div class="row container-fluid">
        <div class="col-lg-6">
          <h5><strong>ID Bayi</strong></h5>
          <p>XXXX</p>
        </div>
        <div class="col-lg-6">
          <h5><strong>Nama Bayi</strong></h5>
          <p>{{ $baby->nama }}</p>
        </div>
        <div class="col-lg-6">
          <h5><strong>Nama Ibu</strong></h5>
            <p>{{ $baby->nama_ibu }}</p>
          </div>
          <div class="col-lg-6">
            <h5><strong>Nama Ayah</strong></h5>
            <p>{{ $baby->nama_ayah }}</p>
          </div>
          <div class="col-lg-3">
            <h5><strong>Tempat Lahir</strong></h5>
            <p>{{ $baby->tempat_lahir }}</p>
          </div>
          <div class="col-lg-3">
            <h5><strong>Tanggal Lahir</strong></h5>
            <p>{{ date('d/m/Y | H:i', $baby->tanggal_lahir) }}</p>
            <p>Usia ({{ $umur }})</p>
          </div>
          <div class="col-lg-3">
            <h5><strong>Jenis Kelamin </strong></h5>
            <p>{{ $jenis_kelamin }}</p>
          </div>
          <div class="col-lg-3">
            <h5><strong>Anak Ke </strong></h5>
            <p>{{ $baby->anak_ke }}</p>
          </div>
          <div class="col-lg-12">
            <h5><strong>Alamat Lengkap  </strong></h5>
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
          <div class="col-lg-6">
            <h5><strong>Golongan Darah </strong></h5>
            <p>{{ $baby->golongan_darah }}</p>
          </div>
          <div class="col-lg-3">
            <h5><strong>Panjang Lahir </strong></h5>
            <p>{{ $baby->panjang_bayi }} cm</p>
          </div>
          <div class="col-lg-3">
            <h5><strong>Berat Lahir </strong></h5>
            <p>{{ $baby->berat_bayi }} kg</p>
          </div>
          <div class="col-lg-6">
              <h5><strong>Panjang Sekarang </strong></h5>
              <p>XXXX cm</p>
          </div>
          <div class="col-lg-6">
              <h5><strong>Berat Sekarang </strong></h5>
              <p>XXXX kg</p>
          </div>
        </div>
      </div>
    </div>
  <div class="mb-5">
    <a href="{{ url('/baby') }}" class="text-decoration-none mx-1">Kembali</a>
    <a href="{{ url('/baby').'/'.$baby->id.'/edit' }}" class="btn btn-warning mx-1">Edit</a>
    <form action="{{ $baby->id }}" method="post" class="d-inline">
      @method('delete')
      @csrf      
      <button class="btn btn-danger mx-1" type="submit">Hapus</button>
    </form>
  </div>
</div>
<!-- /.container-fluid -->
@endsection