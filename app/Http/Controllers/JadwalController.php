<?php

namespace App\Http\Controllers;

use App\tb_jadwal;
use App\tb_walkes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class JadwalController extends Controller
{
    public function index(){
        $tb_jadwal=tb_jadwal::all();
        $id_jadwal=tb_jadwal::pluck('id');
    	return view('admin.jadwal.dt_jadwal', compact('tb_jadwal'));
    }
    public function insert(){
        return view('admin.jadwal.insert');
    }
    public function create(Request $request){

        tb_jadwal::create($request->all());

        // $data = $request->all();
        // return json_encode($data);

        return redirect('/admin/jadwal/dt_jadwal')->with('sukses','Data berhasil di simpan');
    }
}
 