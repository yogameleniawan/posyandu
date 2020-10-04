<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use App\Baby;
use DateTime;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class BabyExport implements FromView
{
    use Exportable;
    
    public function view(): View
    {
        $baby = DB::table('babies AS b')
        ->select('b.id','b.tanggal_lahir')
        ->get();
        $i = 0;
        foreach($baby as $b):
            $umur[$i] = $this->hitung_umur(date('Y-m-d', $b->tanggal_lahir));
            $i++;
        endforeach;
        // dd($umur);
        return view('excel.babies', [
            'babies' => Baby::all(),
            'usia' => $baby
        ]);
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
}
