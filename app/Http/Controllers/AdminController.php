<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
    	return view('admin.home');
    }
    public function homeadmin(){
    	return view('admin.homeadmin');
    }
    public function indexadmin(){
    	return view('admin.index');
    }
    public function index(){
    	return view('index');
    }
}
