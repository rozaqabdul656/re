<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelRangkuman extends Model
{
    protected $table = 'tb_rangkuman';
  
    protected $fillable = [
        'id_materi','id','id_bidang','rangkuman','keterangan'
    ];
}
