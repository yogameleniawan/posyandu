@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-10">
         <!-- Page Heading -->
         <h1 class="h3 mb-2 text-gray-800">Ubah Data Akun</h1>
         <p class="mb-4">Halaman ini untuk mengubah password akun.</p>

         <!-- DataTales Example -->
         <div class="card shadow-sm mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Data Akun</h6>
            </div>
            <div class="card-body container-fluid">
               <form method="post" action="{{ url('/home/'.$user->id) }}">
                  @csrf
                  @method('put')
                  <div class="form-group">
                     <label for="nama">Nama Lengkap</label>
                     <input type="text" placeholder="{{ $user->name }}" class="form-control-plaintext @error('nama') is-invalid @enderror" id="nama" name="nama" data-toggle="tooltip" data-placement="right" title="Nama Lengkap Bayi" value="{{ old('nama') }}" readonly>
                     @error('nama')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
                  </div>
                  <div class="form-group">
                     <label for="email">Alamat Email</label>
                     <input type="text" placeholder="{{ $user->email }}" class="form-control-plaintext @error('email') is-invalid @enderror" id="email" name="email" data-toggle="tooltip" data-placement="right" title="Alamat email" value="{{ old('email') }}" readonly>
                     @error('email')<div class="invalid-feedback ml-1">{{ $message }}</div>@enderror
                  </div>
                  {{-- <div class="form-group">
                     <label for="role">Role</label>
                     <select id="role" name="role" class="form-control @error('role') is-invalid @enderror" data-toggle="tooltip" data-placement="right" title="Golongan Darah Bayi" readonly>
                        <option selected value="Staff2">Staff (Tanpa Akses Chart)</option>
                        <option value="Staff">Staff</option>
                        <option value="Admin">Admin</option>
                     </select>
                     @error('role')<div class="invalid-feedback ml-1">{{ $message }}</div>@enderror
                  </div> --}}
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" data-toggle="tooltip" data-placement="right" title="Password" value="{{ old('password') }}">
                     @error('password')<div class="invalid-feedback ml-1">{{ $message }}</div>@enderror
                  </div>
                  <div class="form-group">
                     <label for="konfirmasi_password">Konfirmasi Password</label>
                     <input type="password" class="form-control @error('konfirmasi_password') is-invalid @enderror" id="konfirmasi_password" name="konfirmasi_password" data-toggle="tooltip" data-placement="right" title="Konfirmasi Password">
                     @error('konfirmasi_password')<div class="invalid-feedback ml-1">{{ $message }}</div>@enderror
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
   </div>
</div>
<!-- /.container-fluid -->
@endsection