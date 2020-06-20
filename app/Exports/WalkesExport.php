<?php

namespace App\Exports;

use App\tb_walkes;
use Illuminate\Contracts\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvoicesExports implements FromView
{
    public function view(): view
    {
        return view('/print/laporanwalkes', [
            'tb_walkes' => tb_walkes::all()
        ]);
    }
}