<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_jadwal extends Model
{
    protected $table='tbl_jadwal';
    protected $primaryKey = 'id';
    protected $fillable =['semester','thn_ajar','hari','j_masuk','j_keluar','id_kelas','mata_pelajaran'];
}

