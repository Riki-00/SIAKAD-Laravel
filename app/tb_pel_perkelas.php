<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_pel_perkelas extends Model
{
    protected $table='tbl_pel_perkelas';
    protected $primaryKey = 'id';
    protected $fillable =['id_walas','id_matapelajaran'];
}

