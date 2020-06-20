<?php

namespace App\Http\Controllers;

use App\tb_siswa;
use App\tb_kelas;
use App\tb_nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class SiswaController extends Controller
{
    public function index(){
        $tb_siswa=tb_siswa::all();
        $id_siswa=tb_siswa::pluck('id');
      

    	return view('admin.siswa.dt_siswa', compact('tb_siswa'));
    }

    public function index_view(){
        
        $tb_siswa=tb_siswa::all();
        return json_encode($tb_siswa);
    }

    public function insert(){
    	return view('admin.siswa.insert');
    }
    public function create(Request $request){

        tb_siswa::create($request->all());

        // $idmax = tb_siswa::max('id');
        // $idmax_nilai = $idmax + 1;
        $id_walas = $request->j;

        $data = DB::table('tbl_kelas')->insert(
            [
                'id_siswa' => $request->nis,
                'id_walas' => $id_walas
            ]);
            
        return redirect('/admin/siswa/dt_siswa')->with('sukses','Data berhasil di simpan');
    }
    public function edit($id){
        $tb_siswa=DB::table('tbl_siswa')->where('nis', $id)->get();
        return view('admin.siswa.edit', ['tb_siswa' => $tb_siswa]);
    }
    public function update(Request $request, $id)
    {
        $siswa = tb_siswa::find($id);
        $siswa->update($request->all());
        return redirect('/admin/siswa/dt_siswa')->with('sukses','Data berhasil di update');

    }
    public function delete($id)
    {
        DB::table('tbl_siswa')->where('nis', $id)->delete();
        return redirect('/admin/siswa/dt_siswa')->with('sukses','Data berhasil di HAPUS');

    }
    public function exportPDF()
    {
        $tb_siswa = tb_siswa::get();
        $pdf = PDF::loadView('print.laporansiswa', compact('tb_siswa'));
        return $pdf->download('Laporan Data Siswa','.pdf');
    }
}
