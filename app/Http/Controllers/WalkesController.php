<?php

namespace App\Http\Controllers;

use App\tb_walkes;
use App\tb_pel_perkelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class WalkesController extends Controller
{
    public function index(){
        $tb_walkes=tb_walkes::all();
        $id_walas=tb_walkes::pluck('id');
    	return view('admin.walkes.wl_kelas', compact('tb_walkes'));
    }
    public function index1($id){

        // return $id;
        $tb_walkes=DB::table('tbl_walas')->where('id', $id)->get();
        // return view('admin.walkes.edit', );
    	return view('admin.walkes.tambah_pelajaran', ['tb_walkes' => $tb_walkes]);
    }

    public function index_view(){
        $tb_walkes=tb_walkes::all();
        return json_encode($tb_walkes);
    }
    public function insert1(){
    	return view('admin.walkes.insert');
    }
    public function create1(Request $request){

        $request->all();
        tb_pel_perkelas::create($request->all());
        return redirect('/admin/walkes/wl_kelas')->with('sukses','Data berhasil di simpan');
    }
    public function edit1($id){
        $tb_walkes=DB::table('tbl_walas')->where('id', $id)->get();
        return view('admin.walkes.edit', ['tb_walkes' => $tb_walkes]);
    }

    public function insert(){
    	return view('admin.walkes.insert');
    }
    public function create(Request $request){

        tb_walkes::create($request->all());
        return redirect('/admin/walkes/wl_kelas')->with('sukses','Data berhasil di simpan');
    }
    public function edit($id){
  	    $tb_walkes=DB::table('tbl_walas')->where('nama_walas', $id)->get();
  	    return view('admin.walkes.edit', ['tb_walkes' => $tb_walkes]);
    }
    public function update(Request $request, $id)
    {
  		$walkes = tb_walkes::find($id);
  		$walkes->update($request->all());
  		return redirect('/admin/walkes/wl_kelas')->with('sukses','Data berhasil di update');

    }
    public function delete($id)
    {
        DB::table('tbl_walas')->where('nama_walas', $id)->delete();
        return redirect('/admin/walkes/wl_kelas')->with('sukses','Data berhasil di HAPUS');

    }
    public function exportPDF()
    {
        $tb_walkes = tb_walkes::get();
        $pdf = PDF::loadView('print.laporanwalkes', compact('tb_walkes'));
        return $pdf->download('Laporan Data Wali Kelas','.pdf');
    }
}
