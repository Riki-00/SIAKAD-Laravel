<?php

namespace App\Http\Controllers;

use App\tb_nilai;
use App\tb_siswa;
use App\tb_walkes;
use App\tb_pelajaran;
use App\tb_pel_perkelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class NilaiController extends Controller
{
    public function index(){
         $tb_nilai=tb_siswa::
       select('nis','nama_siswa','nama_walas','kelas_walas','id_walas')
       ->join('tbl_kelas','tbl_siswa.nis', '=', 'tbl_kelas.id_siswa')
       ->join('tbl_walas','tbl_kelas.id_walas', '=', 'tbl_walas.id')
       ->
       get();

        // return json_encode($tb_pelajaran);
        return view('admin.nilaisiswa.dt_nilai', compact('tb_nilai'));
    }
    public function index2($id){
    $tb_nilai=tb_pel_perkelas::
        select('mata_pelajaran','nama_guru','nilai')->
        // leftjoin('tbl_guru','tbl_pel_perkelas.id_walas', '=', 'tbl_guru.id')->
        join('tbl_pelajaran','tbl_pel_perkelas.id_matapelajaran', '=', 'tbl_pelajaran.id')->
        join('tbl_guru','tbl_pelajaran.id_guru', '=', 'tbl_guru.id')->
        leftjoin('tbl_nilai','tbl_pelajaran.id', '=', 'tbl_nilai.id_pelajaran')
        ->
        where('id_walas', $id)->
        get();
        return view('admin.nilaisiswa.edit_nilai', compact('tb_nilai'));
    } 

}
