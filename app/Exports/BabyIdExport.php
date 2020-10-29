<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use App\Baby;
use DateTime;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class BabyIdExport implements FromView
{
    use Exportable;
    
    public function __construct($baby)
    {
        $this->baby = $baby;
    }

    public function view(): View
    {
        $bayi = DB::table('babies')->where('id', $this->baby->id)->get();
        $progress = DB::table('babies AS b')
        ->join('progress_babies AS p', 'b.id', '=', 'p.id_bayi')
        ->select('b.nama', 'b.nama_ibu', 'b.nama_ayah', 'b.tempat_lahir', 'b.tanggal_lahir', 'b.anak_ke', 'b.alamat', 'b.jenis_kelamin', 'b.golongan_darah', 'p.id_bayi', 'p.bulan_ke', 'p.panjang_bayi', 'p.berat_bayi')
        ->where('id_bayi', $this->baby->id)->orderBy('p.bulan_ke')
        ->get();
        // if(count($progress) == 0){
        //     $progress = null;
        // }else{
        //     dd($progress);
        // }
        // $usia = DB::table('babies AS b')
        // ->select('b.id','b.tanggal_lahir')
        // ->get();
        $i = 0;
        // foreach($baby as $b):
        //     $umur[$i] = $this->hitung_umur(date('Y-m-d', $b->tanggal_lahir));
        //     $i++;
        // endforeach;
        // dd($umur);
        return view('excel.baby', [
            // 'babies' => Baby::all(),
            // 'usia' => $usia,
            'progress' => $progress,
            'bayi' => $bayi
        ]);
    }

    function hitung_umur($tanggal_lahir){
        $birthDate = new DateTime($tanggal_lahir);
        $today = new DateTime("today");
        if ($birthDate > $today) { 
            return("0 tahun 0 bulan 0 hari");
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
}
