<?php
namespace App\Exports;
use App\Baby;
use DateTime;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InvoicesPerMonthSheet implements FromQuery, WithTitle, ShouldAutoSize, WithHeadings
{
    private $year;
    private $month;

    public function __construct(int $year, String $month)
    {
        $this->year  = $year;
        $this->month  = $month;
    }

    /**
     * @return Builder
     */
    public function query()
    {
        return DB::table('babies')->orderBy('id')
            ->whereYear('created_at', $this->year)
            ->whereMonth('created_at', $this->month);
    }

    /**
     * @return string
     */
    public function title(): string
    {   
        // $data = DB::table('babies')->select('nama')->where('id', $this->id)->first();
        return DateTime::createFromFormat('!m',$this->month)->format('F');
    }

    public function headings(): array
    {
        return [
        'id',
        'nama',
        'nama_ibu',
        'pekerjaan_ibu',
        'nama_ayah',
        'pekerjaan_ayah',
        'tempat_lahir',
        'tanggal_lahir',
        'anak_ke',
        'alamat',
        'jenis_kelamin',
        'golongan_darah',
        'panjang_bayi',
        'berat_bayi',
        ];
    }
}