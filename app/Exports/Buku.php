<?php

namespace App\Exports;

use App\RakBuku;
use Maatwebsite\Excel\Concerns\FromCollection;


class Buku implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RakBuku::get();
    }
}
