<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\JenisBuku;
use App\Models\RakBuku;
// use App\Export\Buku; 
use Maatwebsite\Excel\Facades\Excel;

class kegiatan4 extends Controller
{
    public function index0194()
    {
       $no=1;
       $data = RakBuku::with('buku','jenisbuku')->get();
       return view('index0194',compact('data','no'));
    }
    public function Exports0194() 
    {
        return Excel::download(new Buku, 'Data_1461900194.xlsx');
    }
}
