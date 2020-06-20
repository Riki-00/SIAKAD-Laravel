<?php

namespace App\Exports;

use App\tb_pelajaran;
use App\tb_guru;
use Illuminate\Contracts\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvoicesExports implements FromView
{
    public function view(): view
    {
        return view('/print/laporanmatpel', [
            'tb_pelajaran' => tb_pelajaran::all()
        ]);
    }
}