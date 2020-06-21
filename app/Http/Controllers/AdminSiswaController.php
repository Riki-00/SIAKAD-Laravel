<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSiswaController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }
    public function homeadmin()
    {
        return view('admin.homeadmin');
    }
    public function indexSiswa()
    {
        return view('siswa.index');
    }
    public function index()
    {
        return view('index');
    }
}
