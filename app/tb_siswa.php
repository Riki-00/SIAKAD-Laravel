<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_siswa extends Model
{
    protected $table='tbl_siswa';
    protected $primaryKey = 'id';
    protected $fillable =['nis','nama_siswa','tempat_lahir','tgl_lahir','alamat_siswa','jenis_kelamin','no_hp','status_siswa','tahun_daftar'];
}

