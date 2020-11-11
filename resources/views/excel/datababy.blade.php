<table>
   <thead>
      <tr>
        <th>No. Pendaftaran</th>
        <th>Nama Anak</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Berat Lahir</th>
        <th>Tinggi Lahir</th>      
        <th>Umur</th>
        <th>Anak ke-</th>
        <th>Alamat</th>
        <th>Nama Ibu</th>
        <th>Pekerjaan Ibu</th>
        <th>Nama Ayah</th>
        <th>Pekerjaan Ayah</th>
        <th>Dibuat Tanggal</th>
      </tr>
   </thead>
   <tbody>
      @foreach($bayi as $baby)
      <tr>
         <td>{{ $baby->id }}</td>
         <td>{{ $baby->nama }}</td>
         <td>{{ date('d M Y | H:i', $baby->tanggal_lahir) }}</td>
         @if( $baby->jenis_kelamin == 1)
            <td>Laki-laki</td>
         @else
            <td>Perempuan</td>
         @endif
         <td>{{ $baby->berat_bayi }} Kg</td>
         <td>{{ $baby->panjang_bayi }} cm</td>
         @if((int)date('d', $baby->tanggal_lahir) < (int)$d)
         <td> {{ (int)$y - (int)date('Y', $baby->tanggal_lahir)  }} Tahun {{ (int)$m - (int)date('m', $baby->tanggal_lahir) }} Bulan {{ (int)$d - (int)date('d', $baby->tanggal_lahir) }} Hari</td>
         @else
         <td> {{ (int)$y - (int)date('Y', $baby->tanggal_lahir)  }} Tahun {{ (int)$m - (int)date('m', $baby->tanggal_lahir) }} Bulan {{ (int)date('d', $baby->tanggal_lahir) - (int)$d }} Hari</td>
         @endif
         <td>{{ $baby->anak_ke }}</td>
         <td>{{ $baby->alamat }}</td>
         <td>{{ $baby->nama_ibu }}</td>
         <td>{{ $baby->pekerjaan_ibu }}</td>
         <td>{{ $baby->nama_ayah }}</td>
         <td>{{ $baby->pekerjaan_ayah }}</td>
         <td>{{ $baby->created_at }}</td>
      </tr>
      @endforeach
   </tbody>
</table>
@if($progress != null)
<table>
    <thead>
        <tr>
            <th>Bulan Ke-</th>
            <th>Tinggi Bayi (cm)</th>
            <th>Berat Bayi (kg)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bayi as $b)
        <tr>
            <td>0</td>
            <td>{{ $b->panjang_bayi }}</td>
            <td>{{ $b->berat_bayi }}</td>
        </tr>
        @endforeach
        @foreach($progress as $p)
        <tr>
            <td>{{ $p->bulan_ke }}</td>
            <td>{{ $p->panjang_bayi }}</td>
            <td>{{ $p->berat_bayi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif