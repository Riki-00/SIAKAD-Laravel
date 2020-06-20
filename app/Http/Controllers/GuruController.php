<?php

namespace App\Http\Controllers;

use App\tb_guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class GuruController extends Controller
{
    public function index(){
        $tb_guru=tb_guru::all();
        $id_guru=tb_guru::pluck('id');
    	return view('admin.guru.dt_guru', compact('tb_guru'));
    }

    public function index_view(){
        $tb_guru=tb_guru::all();
        return json_encode($tb_guru);
    }
    public function insert(){
    	return view('admin.guru.insert');
    }
    public function create(Request $request){

        tb_guru::create($request->all());
        return redirect('/admin/guru/dt_guru')->with('sukses','Data berhasil di simpan');
    }
    public function edit($id){
  	    $tb_guru=DB::table('tbl_guru')->where('nip', $id)->get();
  	    return view('admin.guru.edit', ['tb_guru' => $tb_guru]);
    }
    public function update(Request $request, $id){
  	    $guru = tb_guru::find($id);
  	    $guru->update($request->all());
  	    return redirect('/admin/guru/dt_guru')->with('sukses','Data berhasil di UPDATE');
    }
    public function delete($id){
        DB::table('tbl_guru')->where('nip', $id)->delete();
        return redirect('/admin/guru/dt_guru')->with('sukses','Data berhasil di HAPUS');

    }
    public function exportPDF()
    {
        $tb_guru = tb_guru::get();
        $pdf = PDF::loadView('print.laporanguru', compact('tb_guru'));
        return $pdf->download('Laporan Data Guru','.pdf');
    }
}