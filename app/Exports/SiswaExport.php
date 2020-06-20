<?php

namespace App\Exports;

use App\tb_siswa;
use Illuminate\Contracts\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvoicesExports implements FromView
{
    public function view(): view
    {
        return view('/print/laporansiswa', [
            'tb_siswa' => tb_siswa::all()
        ]);
    }
}