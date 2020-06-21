<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGuruController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }
    public function homeadmin()
    {
        return view('admin.homeadmin');
    }
    public function indexGuru()
    {
        return view('guru.index');
    }
    public function index()
    {
        return view('index');
    }
}
