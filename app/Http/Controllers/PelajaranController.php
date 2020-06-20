<?php

namespace App\Http\Controllers;

use App\tb_pelajaran;
use App\tb_guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PelajaranController extends Controller
{
    public function index(){
        $tb_pelajaran=tb_pelajaran::select('nip','nama_guru','mata_pelajaran','cakupan')->join('tbl_guru','tbl_pelajaran.id_guru', '=', 'tbl_guru.id')->get();

        // return json_encode($tb_pelajaran);
        return view('admin.pelajaran.mt_pelajaran', compact('tb_pelajaran'));
    }

    public function index_view(){
        $tb_pelajaran=tb_pelajaran::all();
        return json_encode($tb_pelajaran);
    }

    public function insert(){
    	return view('admin.pelajaran.insert');
    }
    public function create(Request $request){

        tb_pelajaran::create($request->all());

        // $data = $request->all();
        // return json_encode($data);

        return redirect('/admin/pelajaran/mt_pelajaran')->with('sukses','Data berhasil di simpan');
    }
    public function edit($id){
        $tb_pelajaran=DB::table('tbl_pelajaran')->where('id', $id)->get();
        return view('admin.pelajaran.edit', ['tb_pelajaran' => $tb_pelajaran]);
    }
    public function update(Request $request, $id)
    {
        $pelajaran = tb_pelajaran::find($id);
        $pelajaran->update($request->all());
        return redirect('/admin/pelajaran/mt_pelajaran')->with('sukses','Data berhasil di update');

    }
    public function delete($id)
    {
        DB::table('tbl_pelajaran')->where('mata_pelajaran', $id)->delete();
        return redirect('/admin/pelajaran/mt_pelajaran')->with('sukses','Data berhasil di HAPUS');

    }
    public function exportPDF()
    {
        $tb_pelajaran=tb_pelajaran::select('nip','nama_guru','mata_pelajaran','cakupan')->join('tbl_guru','tbl_pelajaran.id_guru', '=', 'tbl_guru.id')->get();
        $pdf = PDF::loadView('print.laporanmatpel', compact('tb_pelajaran'));
        return $pdf->download('Mata Pelajaran','.pdf');
    }
}
