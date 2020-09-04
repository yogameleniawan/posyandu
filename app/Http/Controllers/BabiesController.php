<?php

namespace App\Http\Controllers;

use App\ProgressBaby;
use App\Baby;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Foundation\Console\Presets\React;

class BabiesController extends Controller
{
    
    public function progress(Baby $baby){
        $progress = DB::table('babies AS b')
        ->join('progress_babies AS p', 'b.id', '=', 'p.id_bayi')
        ->select('b.nama', 'b.nama_ibu', 'b.nama_ayah', 'b.tempat_lahir', 'b.tanggal_lahir', 'b.anak_ke', 'b.alamat', 'b.jenis_kelamin', 'b.golongan_darah', 'p.id_bayi', 'p.bulan_ke', 'p.panjang_bayi', 'p.berat_bayi')
        ->where('id_bayi', $baby->id)
        ->get();
        $jk = $baby->jenis_kelamin == 1 ? 'Laki-laki' : 'Perempuan';
        // dd($progress);
        if(count($progress) == 0){
            $data = [
                'baris' => $baby,
                'progress' => null,
                'jk' => $jk
            ];
        }else{
            $data = [
                'baris' => $baby,
                'progress' => $progress,
                'jk' => $jk
            ];
        }
        echo view('progress.index', $data);
        echo view('progress.kms-laki');

    }

    public function simpanprogress(Request $request){
        $request->validate([
            'panjang_bayi' => 'required',
            'berat_bayi' => 'required'
        ]);
        ProgressBaby::create($request->all());
        return redirect('/baby/'.$request->id_bayi.'/progress')->with('status', "Data baru berhasil ditambahkan");
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $babies = Baby::all();
        return view('baby', compact('babies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'anak_ke' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'golongan_darah' => 'required',
            'panjang_bayi' => 'required',
            'berat_bayi' => 'required'
        ]);
        
        $request->nama = ucwords($request->nama);
        $request->nama_ibu = ucwords($request->nama_ibu);
        $request->nama_ayah = ucwords($request->nama_ayah);
        $request->tempat_lahir = ucfirst($request->tempat_lahir);
        $request->alamat = ucfirst($request->alamat);
        
        $request->tanggal_lahir = mktime(
            (int)substr($request->tanggal_lahir, 11, 2), // jam
            (int)substr($request->tanggal_lahir, 14, 2), //menit
            00, // detik
            (int)substr($request->tanggal_lahir, 5, 2), // bulan
            (int)substr($request->tanggal_lahir, 8, 2), // tanggal
            (int)substr($request->tanggal_lahir, 0, 4) // tahun
        );
        // $baby = new Baby;
        // $baby->nama = $request->nama;
        // $baby->nama_ibu = $request->nama_ibu;
        // $baby->nama_ayah = $request->nama_ayah;
        // $baby->save();


        Baby::create([
            'nama' => $request->nama,
            'nama_ibu' => $request->nama_ibu,
            'nama_ayah' => $request->nama_ayah,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'anak_ke' => $request->anak_ke,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'golongan_darah' => $request->golongan_darah,
            'panjang_bayi' => $request->panjang_bayi,
            'berat_bayi' => $request->berat_bayi
        ]);

        // otomatis mengisi yang di fillable tanpa inisialisasi satu per satu
        // Baby::create($request->all());
        return redirect('/baby')->with('status', "Data '" . $request->nama . "' berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function show(Baby $baby)
    {
        $umur = $this->hitung_umur(date('Y-m-d', $baby->tanggal_lahir));
        $jk = $baby->jenis_kelamin == 1 ? 'Laki-laki' : 'Perempuan';
        $data = [
            'baby' => $baby,
            'jenis_kelamin' => $jk,
            'umur' => $umur
        ];
        return view('show', $data);
    }

    function hitung_umur($tanggal_lahir){
        $birthDate = new DateTime($tanggal_lahir);
        $today = new DateTime("today");
        if ($birthDate > $today) { 
            exit("0 tahun 0 bulan 0 hari");
        }
        $y = $today->diff($birthDate)->y;
        $m = $today->diff($birthDate)->m;
        $d = $today->diff($birthDate)->d;
        if($y > 0){
            if($m == 0 && $d ==0){
                return $y." tahun";
            }else if($m == 0){
                return $y." tahun ".$d." hari";
            }else if($d == 0){
                return $y." tahun ".$m." bulan";
            }else{
                return $y." tahun ".$m." bulan ".$d." hari";
            }
        }else if($m > 0){
            if($y == 0 && $d ==0){
                return $m." bulan";
            }else if($y == 0){
                return $m." bulan ".$d." hari";
            }else if($d == 0){
                return $y." tahun ".$m." bulan";
            }else{
                return $y." tahun ".$m." bulan ".$d." hari";
            }
        }else{
            return $d." hari";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function edit(Baby $baby)
    {
        $umur = $this->hitung_umur(date('Y-m-d', $baby->tanggal_lahir));
        $laki = '';$perempuan = '';
        switch($baby->jenis_kelamin){
            case 1: $laki = 'checked';
                break;
            case 2: $perempuan = 'checked';
                break;
        }
        $a = '';$b = '';$ab = '';$o = '';$bt = '';
        switch($baby->golongan_darah){
            case 'a': $a = 'selected';
                break;
            case 'b': $b = 'selected';
                break;
            case 'ab': $ab = 'selected';
                break;
            case 'o': $o = 'selected';
                break;
            case 'bt': $bt = 'selected';
                break;
        }
        $data = [
            'baby' => $baby,
            'laki' => $laki,
            'perempuan' => $perempuan,
            'a' => $a,
            'b' => $b,
            'ab' => $ab,
            'o' => $o,
            'bt' => $bt,
            'umur' => $umur
        ];
        return view('edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Baby $baby)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Baby $baby)
    {
        Baby::destroy($baby->id);
        return redirect('/baby')->with('status', "Data '" . $baby->nama . "' berhasil dihapus");
    }
}
