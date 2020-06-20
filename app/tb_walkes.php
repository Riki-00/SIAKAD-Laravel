<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_walkes extends Model
{
    protected $table='tbl_walas';
    protected $primaryKey = 'id';
    protected $fillable =['nama_walas','kelas_walas'];
}