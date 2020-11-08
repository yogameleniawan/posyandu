<?php
namespace App\Exports;
use App\Baby;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BabiesPerSheet implements FromQuery, WithTitle, ShouldAutoSize, WithHeadings
{
    private $id;
    private $nama;

    public function __construct(int $id, String $nama)
    {
        $this->id  = $id;
        $this->nama  = $nama;
    }

    /**
     * @return Builder
     */
    public function query()
    {
        return DB::table('babies')->orderBy('id')
            ->where('id', $this->id);
    }

    /**
     * @return string
     */
    public function title(): string
    {   
        // $data = DB::table('babies')->select('nama')->where('id', $this->id)->first();
        return $this->nama;
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