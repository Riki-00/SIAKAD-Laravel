<?php

namespace App\Exports;

use App\tb_guru;
use Illuminate\Contracts\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvoicesExports implements FromView
{
    public function view(): view
    {
        return view('/print/laporanguru', [
            'tb_guru' => tb_guru::all()
        ]);
    }
}