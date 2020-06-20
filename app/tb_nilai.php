<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_nilai extends Model
{
    protected $table='tbl_nilai';
    protected $primaryKey = 'id';
    protected $fillable =['id_siswa','id_pelajaran','nilai'];
}

