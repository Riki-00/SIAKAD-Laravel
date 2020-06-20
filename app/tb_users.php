<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_users extends Model
{
    protected $table='tbl_user';
    protected $fillable =['username','password','nama_lengkap','jenis_kelamin','no_telp','alamat_user','level'];
}