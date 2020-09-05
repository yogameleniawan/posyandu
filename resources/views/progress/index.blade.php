@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container">

   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Pertumbuhan Bayi</h1>
   <p class="mb-4">Halaman ini untuk memantau pertumbuhan bayi.</p>

   <!-- Area Chart -->
   <div class="card shadow-sm mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">Berat Badan menurut usia ({{$jk}})</h6>
         <div class="dropdown no-arrow">
         <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-right shadow-sm animated--fade-in" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Dropdown Header:</div>
            <a class="dropdown-item active" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
         </div>
         </div>
      </div>
      <!-- Card Body -->
      <div class="card-body">
         <div class="chart-area">
         <canvas id="myAreaChart"></canvas>
         </div>
      </div>
   </div>

   <!-- DataTables Example -->
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
<script src="/vendor/chart.js/Chart.min.js"></script>
<!-- /.container-fluid -->
@endsection