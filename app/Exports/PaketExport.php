<?php

namespace App\Exports;

use App\Paket;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class PaketExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Pegawai::all();
        $ar_paket = DB::table('paket')
        ->select('paket.*')
        ->get();


        return $ar_paket;
    }
}
