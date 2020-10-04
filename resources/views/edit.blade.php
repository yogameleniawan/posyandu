@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container">

   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Ubah Data Bayi</h1>
   <p class="mb-4">Form ini untuk input perkembangan bayi dan data bayi.</p>

   <!-- DataTales Example -->
   <div class="card shadow-sm mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Data Bayi</h6>
      </div>
      <div class="card-body container-fluid">
         @method('patch')
         <form method="post" action="{{ url('/baby/'.$baby->id) }}">
            @csrf
            @method('put')
            <div class="row">
               <div class="col-xl-6 mr-auto">
                  <h5><strong>Informasi Pribadi</strong></h5>
                  <hr class="divider">
                  <div class="form-group">
                     <label class="font-weight-bold" for="nama">Nama Bayi</label>
                     <input type="disabled" class="form-control-plaintext @error('nama') is-invalid @enderror" id="nama" name="nama" data-toggle="tooltip" data-placement="right" title="Nama Lengkap Bayi" value="{{ $baby->nama }}" readonly>
                     @error('nama')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
                  <div class="form-group">
                     <label class="font-weight-bold" for="nama_ibu">Nama Ibu</label>
                     <input type="disabled" class="form-control-plaintext @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" data-toggle="tooltip" data-placement="right" title="Nama Lengkap Ibu Bayi" value="{{ $baby->nama_ibu }}" readonly>
                     @error('nama_ibu')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
                  <div class="form-group">
                     <label class="font-weight-bold" for="pekerjaan_ibu">Pekerjaan Ibu</label>
                     <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu" name="pekerjaan_ibu" data-toggle="tooltip" data-placement="right" title="Nama Lengkap Ibu Bayi" value="{{ $baby->pekerjaan_ibu }}">
                     @error('pekerjaan_ibu')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
                  <div class="form-group">
                     <label class="font-weight-bold" for="nama_ayah">Nama Ayah</label>
                     <input type="disabled" class="form-control-plaintext @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" data-toggle="tooltip" data-placement="right" title="Nama Lengkap Ayah Bayi" value="{{ $baby->nama_ayah }}" readonly>
                     @error('nama_ayah')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
                  <div class="form-group">
                     <label class="font-weight-bold" for="pekerjaan_ayah">Pekerjaan Ayah</label>
                     <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah" name="pekerjaan_ayah" data-toggle="tooltip" data-placement="right" title="Nama Lengkap Ayah Bayi" value="{{ $baby->pekerjaan_ayah }}">
                     @error('pekerjaan_ayah')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label class="font-weight-bold" for="tempat_lahir">Tempat Lahir</label>
                           <input type="disabled" class="form-control-plaintext @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" data-toggle="tooltip" data-placement="right" title="Tempat Lahir Bayi" value="{{ $baby->tempat_lahir }}" readonly>
                           @error('tempat_lahir')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                        </div>
                     </div>
                     <div class="col-sm-6">                        
                        <div class="form-group">
                           <label class="font-weight-bold" for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="disabled" class="form-control-plaintext @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" data-toggle="tooltip" data-placement="right" title="Tanggal Lahir Bayi" value="<?= date('d-m-Y', $baby->tanggal_lahir)." ".date('H:i', $baby->tanggal_lahir) ?>" readonly>
                           @error('tanggal_lahir')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-4">   
                        <div class="form-group">
                           <label class="font-weight-bold" for="anak_ke">Anak ke-</label>
                           <input type="disabled" class="form-control-plaintext @error('anak_ke') is-invalid @enderror" name="anak_ke" id="anak_ke" data-toggle="tooltip" data-placement="right" title="Anak Ke-" value="{{ $baby->anak_ke }}" readonly>
                           @error('anak_ke')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                        </div>
                     </div>
                     <div class="col-8">   
                        <div class="form-group">
                           <label class="font-weight-bold" for="anak_ke">Usia Bayi</label>
                           <input type="disabled" class="form-control-plaintext @error('anak_ke') is-invalid @enderror" name="anak_ke" id="anak_ke" data-toggle="tooltip" data-placement="right" title="Anak Ke-" value="{{ $umur }}" readonly>
                           @error('anak_ke')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="font-weight-bold" for="alamat">Alamat</label>
                     <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3"  data-toggle="tooltip" data-placement="right" title="Alamat Lengkap">{{ $baby->alamat }}</textarea>
                     @error('alamat')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
               </div>
               <div class="col-xl-6 ml-auto">
                  <h5><strong>Informasi Kesehatan</strong></h5>
                  <hr class="divider">
                  <label class="font-weight-bold" for="jenis_kelamin">Jenis Kelamin</label>
                  <div class="form-group mt-2">
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="1" {{ $laki }} disabled>
                        <label class="form-check-label" for="laki" disabled>
                          Laki-laki
                        </label>
                     </div>
                      <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="2" {{ $perempuan }} disabled>
                         <label class="form-check-label" for="perempuan" disabled>
                          Perempuan
                        </label>
                      </div>
                     </div>
                     <div class="form-group">
                        <label class="font-weight-bold" for="golongan_darah">Golongan Darah</label>
                        <select id="golongan_darah" name="golongan_darah" class="form-control @error('golongan_darah') is-invalid @enderror" data-toggle="tooltip" data-placement="right" title="Golongan Darah Bayi">
                           <option value="BT" {{ $BT }}>Belum Tahu</option>
                           <option value="A" {{ $A }}>A</option>
                           <option value="B" {{ $B }}>B</option>
                           <option value="AB" {{ $AB }}>AB</option>
                           <option value="O" {{ $O }}>O</option>
                        </select>
                        @error('golongan_darah')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                     </div>
                     <div class="form-group">
                        <label class="font-weight-bold" for="panjang_bayi">Panjang Lahir (cm)</label>
                        <input type="number" placeholder="dalam cm" class="form-control-plaintext @error('panjang_bayi') is-invalid @enderror" name="panjang_bayi" id="panjang_bayi" data-toggle="tooltip" data-placement="right" title="Tinggi Badan Bayi Saat Lahir" value="{{ $baby->panjang_bayi }}" readonly>
                        @error('panjang_bayi')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                     </div>
                     <div class="form-group">
                        <label class="font-weight-bold" for="berat_bayi">Berat Lahir (kg)</label>
                        <input type="number" placeholder="dalam kg" class="form-control-plaintext @error('berat_bayi') is-invalid @enderror" name="berat_bayi" id="berat_bayi" data-toggle="tooltip" data-placement="right" title="Berat Badan Bayi Saat Lahir" value="{{ $baby->berat_bayi }}" readonly>
                        @error('berat_bayi')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                     </div>
                     {{-- <h5 class="mt-5"><strong>Perkembangan Bayi</strong></h5>
                     <hr class="divider">
                     <div class="form-group">
                        <label class="font-weight-bold" for="berat_bayi">Panjang Sekarang (cm)</label>
                        <input type="number" placeholder="dalam cm" class="form-control @error('panjang_bayi') is-invalid @enderror" name="panjang_bayi" id="panjang_bayi" data-toggle="tooltip" data-placement="right" title="Panjang Badan Bayi Saat Ini" min="1">
                        @error('panjang_bayi')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                     </div>
                     <div class="form-group">
                        <label class="font-weight-bold" for="berat_bayi">Berat Sekarang (kg)</label>
                        <input type="number" placeholder="dalam kg" class="form-control @error('berat_bayi') is-invalid @enderror" name="berat_bayi" id="berat_bayi" data-toggle="tooltip" data-placement="right" title="Berat Badan Bayi Saat Ini" min="1">
                        @error('berat_bayi')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                     </div> --}}
               </div>
            </div>
            <div class="row mt-4">
               <div class="col">               
                  <div class="text-center">
                     <button type="submit" class="btn btn-block btn-primary">Update Data</button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- /.container-fluid -->
@endsection