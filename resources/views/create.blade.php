@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container">

   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Tambah Data Bayi</h1>
   <p class="mb-4">Hati-hati dalam input data. Beberapa data tidak dapat diubah setelah diinput.</p>

   <!-- DataTales Example -->
   <div class="card shadow-sm mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Data Bayi</h6>
      </div>
      <div class="card-body container-fluid">
         <form method="post" action="{{ url('/baby') }}">
            @csrf
            <div class="row">
               <div class="col-xl-6 mr-auto">
                  <h5><strong>Informasi Pribadi</strong></h5>
                  <hr class="divider">
                  <div class="form-group">
                     <label for="nama">Nama Bayi</label>
                     <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" data-toggle="tooltip" data-placement="right" title="Nama Lengkap Bayi" value="{{ old('nama') }}" autofocus>
                     @error('nama')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
                  <div class="form-group">
                     <label for="nama_ibu">Nama Ibu</label>
                     <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu" name="nama_ibu" data-toggle="tooltip" data-placement="right" title="Nama Lengkap Ibu Bayi" value="{{ old('nama_ibu') }}">
                     @error('nama_ibu')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
                  <div class="form-group">
                     <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                     <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu" name="pekerjaan_ibu" data-toggle="tooltip" data-placement="right" title="Nama Lengkap Ibu Bayi" value="{{ old('pekerjaan_ibu') }}">
                     @error('pekerjaan_ibu')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
                  <div class="form-group">
                     <label for="nama_ayah">Nama Ayah</label>
                     <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah" name="nama_ayah" data-toggle="tooltip" data-placement="right" title="Nama Lengkap Ayah Bayi" value="{{ old('nama_ayah') }}">
                     @error('nama_ayah')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
                  <div class="form-group">
                     <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                     <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah" name="pekerjaan_ayah" data-toggle="tooltip" data-placement="right" title="Nama Lengkap Ayah Bayi" value="{{ old('pekerjaan_ayah') }}">
                     @error('pekerjaan_ayah')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="tempat_lahir">Tempat Lahir</label>
                           <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" data-toggle="tooltip" data-placement="right" title="Tempat Lahir Bayi" value="{{ old('tempat_lahir') }}">
                           @error('tempat_lahir')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                        </div>
                     </div>
                     <div class="col-sm-6">                        
                        <div class="form-group">
                           <label for="tanggal_lahir">Tanggal Lahir</label>
                           <input type="datetime-local" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" data-toggle="tooltip" data-placement="right" title="Tanggal Lahir Bayi" value="<?= date('Y-m-d')."T".date('H:i') ?>" max="<?= date('Y-m-d'); ?>T23:59">
                           @error('tanggal_lahir')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-4">   
                        <div class="form-group">
                           <label for="anak_ke">Anak ke-</label>
                           <input type="number" min="1" class="form-control @error('anak_ke') is-invalid @enderror" name="anak_ke" id="anak_ke" data-toggle="tooltip" data-placement="right" title="Anak Ke-" value="{{ old('anak_ke') }}">
                           @error('anak_ke')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="alamat">Alamat</label>
                     <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3"  data-toggle="tooltip" data-placement="right" title="Alamat Lengkap"></textarea>
                     @error('alamat')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
               </div>
               <div class="col-xl-6 ml-auto">
                  <h5><strong>Informasi Kesehatan</strong></h5>
                  <hr class="divider">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                  <div class="form-group mt-2">
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="1" checked>
                        <label class="form-check-label" for="laki">
                          Laki-laki
                        </label>
                     </div>
                      <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="2">
                         <label class="form-check-label" for="perempuan">
                          Perempuan
                        </label>
                      </div>
                     </div>
                     <div class="form-group">
                        <label for="golongan_darah">Golongan Darah</label>
                        <select id="golongan_darah" name="golongan_darah" class="form-control @error('golongan_darah') is-invalid @enderror" data-toggle="tooltip" data-placement="right" title="Golongan Darah Bayi">
                           <option selected value="BT">Belum Tahu</option>
                           <option value="A">A</option>
                           <option value="B">B</option>
                           <option value="AB">AB</option>
                           <option value="O">O</option>
                        </select>
                        @error('golongan_darah')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                     </div>
                     <div class="form-group">
                        <label for="panjang_bayi">Panjang Bayi</label>
                        <input type="number" min="1" placeholder="dalam cm" class="form-control @error('panjang_bayi') is-invalid @enderror" name="panjang_bayi" id="panjang_bayi" data-toggle="tooltip" data-placement="right" title="Tinggi Badan Bayi Saat Lahir" value="{{ old('panjang_bayi') }}" step="any">
                        @error('panjang_bayi')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                     </div>
                     <div class="form-group">
                        <label for="berat_bayi">Berat Bayi</label>
                        <input type="number" min="1" placeholder="dalam kg" class="form-control @error('berat_bayi') is-invalid @enderror" name="berat_bayi" id="berat_bayi" data-toggle="tooltip" data-placement="right" title="Berat Badan Bayi Saat Lahir" value="{{ old('berat_bayi') }}" step="any">
                        @error('berat_bayi')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
               </div>
            </div>
            <div class="row mt-4">
               <div class="col">               
                  <div class="text-center">
                     <button type="submit" class="btn btn-block btn-primary">Daftar</button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- /.container-fluid -->
@endsection