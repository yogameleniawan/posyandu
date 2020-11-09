<?php
namespace App\Exports;
use App\Baby;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\DB;

class BabiesExport implements WithMultipleSheets,ShouldAutoSize
{
    use Exportable;

    // protected $year;
    // protected $baby;
    
    // public function __construct($baby)
    // {
    //     // $this->year = $year;
    //     $this->baby = $baby;
    // }

    /**
     * @return array
     */
    public function sheets(): array
    {
        $users = DB::table('babies')->count();
        $data = DB::table('babies')->select('id','nama')
        ->whereNull('deleted_at')
        ->get();
        $sheets = [];
        foreach($data as $d):
            $sheets[] = new BabiesPerSheet($d->id, $d->nama);
        endforeach;
        return $sheets;
    }
}