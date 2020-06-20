<?php

namespace App\Http\Controllers;

use App\tb_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){
        $tb_users=tb_users::all();
        $id_user=tb_users::pluck('id');
    	return view('admin.users.user', compact('tb_users'));
    }
}
