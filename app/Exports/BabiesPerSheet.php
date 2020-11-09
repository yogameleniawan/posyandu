<?php
namespace App\Exports;
use App\Baby;
use DateTime;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithTitle;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;


class BabiesPerSheet implements FromView, WithTitle, ShouldAutoSize, WithHeadings
{
    use Exportable;
    private $id;
    private $nama;

    public function __construct(int $id, String $nama)
    {
        $this->id  = $id;
        $this->nama  = $nama;
    }


    public function view(): View
    {
        $d = Carbon::now()->format('d');
        $m = Carbon::now()->format('m');
        $y = Carbon::now()->format('Y');
        $bayi = DB::table('babies')->where('id', $this->id)->get();
        $progress = DB::table('babies AS b')
        ->join('progress_babies AS p', 'b.id', '=', 'p.id_bayi')
        ->select('b.nama', 'b.nama_ibu', 'b.nama_ayah', 'b.tempat_lahir', 'b.tanggal_lahir', 'b.anak_ke', 'b.alamat', 'b.jenis_kelamin', 'b.golongan_darah', 'p.id_bayi', 'p.bulan_ke', 'p.panjang_bayi', 'p.berat_bayi')
        ->where('id_bayi', $this->id)->orderBy('p.bulan_ke')
        ->get();

        return view('excel.datababy', [
            'progress' => $progress,
            'bayi' => $bayi,
            'd' => $d,
            'm' => $m,
            'y' => $y,
        ]);
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
            [
                'No. Pendaftaran',
                'Nama Anak',
                'Tanggal Lahir',
                'Jenis Kelamin',
                'Berat Lahir',
                'Tinggi Lahir',
                'Umur',
                'Anak Ke',
                'Alamat',
                'Nama Ibu',
                'Pekerjaan Ibu',
                'Nama Ayah',
                'Pekerjaan Ayah',
            ],
        ];
    }
}