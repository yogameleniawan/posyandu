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
    
    // public function __construct(int $year)
    // {
    //     $this->year = $year;
    // }

    /**
     * @return array
     */
    public function sheets(): array
    {
        $users = DB::table('babies')->count();
        $data = DB::table('babies')->select('id','nama')->get();
        $sheets = [];

        foreach($data as $d):
            $sheets[] = new BabiesPerSheet($d->id, $d->nama);
        endforeach;

        // for ($id = 1; $id <= $users; $id++) {
        //     $sheets[] = new InvoicesPerMonthSheet($id);
        // }

        return $sheets;
    }
}