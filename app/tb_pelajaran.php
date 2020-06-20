<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_pelajaran extends Model
{
    protected $table='tbl_pelajaran';
    protected $primaryKey = 'id';
    protected $fillable =['id_guru','mata_pelajaran','cakupan'];
}

