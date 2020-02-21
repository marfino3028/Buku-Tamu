<?php

namespace App\Exports;

use App\Tamu;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class TamuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
       

        return Tamu::all;
    }
}
