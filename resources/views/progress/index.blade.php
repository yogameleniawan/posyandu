@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container">

   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Perkembangan Bayi</h1>
   <p class="mb-4">Halaman ini untuk memantau perkembangan bayi.</p>

   <!-- DataTales Example -->
   <div class="card shadow-sm mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ $baris->nama }}</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Bulan Ke-</th>
                <th>Panjang Bayi</th>
                <th>Berat Bayi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Bulan Ke-</th>
                <th>Panjang Bayi</th>
                <th>Berat Bayi</th>
              </tr>
            </tfoot>
            <tbody>
               <tr>
                  <td class="text-center">0</td>
                  <td>{{ $baris->panjang_bayi}} cm</td>
                  <td>{{ $baris->berat_bayi }} kg</td>
               </tr>
               @if($progress)
               @foreach($progress as $p)
               <tr>
                  <td class="text-center">{{ $loop->iteration }}</td>
                  <td>{{ $p->panjang_bayi }} cm</td>
                  <td>{{ $p->berat_bayi }} kg</td>
               </tr>
               @endforeach
               @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php 
    if($progress == null){
       $bulan_ke = 1;
    }else{
       $bulan_ke = count($progress)+1;
    }
    ; ?>

   <!-- DataTables Example -->
   <div class="card shadow-sm mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Data Bayi</h6>
      </div>
      <div class="card-body container-fluid">
         <form method="post" action="/baby/progress">
            @csrf
            <input type="hidden" name="bulan_ke" value="{{ $bulan_ke }}">
            <input type="hidden" name="id_bayi" value="{{ $baris->id }}">
            <div class="form-group">
               <label for="panjang_bayi">Panjang Bayi (cm)</label>
               <input type="number" class="form-control @error('panjang_bayi') is-invalid @enderror" name="panjang_bayi" id="panjang_bayi" data-toggle="tooltip" data-placement="right" title="Panjang Bayi Sekarang" placeholder="Panjang sekarang" min="1">
               @error('panjang_bayi')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
            </div>
            <div class="form-group">
               <label for="berat_bayi">Berat Bayi (kg)</label>
               <input type="number" class="form-control @error('berat_bayi') is-invalid @enderror" name="berat_bayi" id="berat_bayi" data-toggle="tooltip" data-placement="right" title="Berat Bayi Sekarang" placeholder="Berat sekarang" min="1">
               @error('berat_bayi')<div class="invalid-feedback ml-1">Bidang ini wajib diisi</div>@enderror
            </div>
            <button type="submit" class="btn btn-block btn-primary">Simpan</button>
         </form>
      </div>
   </div>
</div>
<!-- /.container-fluid -->
@endsection