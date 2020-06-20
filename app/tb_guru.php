<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_guru extends Model
{
    protected $table='tbl_guru';
    protected $primaryKey = 'id';
    protected $fillable =['nip','nama_guru','jenis_kelamin','no_telp','alamat_guru','tempat_lahir','tgl_lahir','status'];
}
