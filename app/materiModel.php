<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materiModel extends Model
{
	protected $table = 'tb_materi';
  
    protected $fillable = [
        'file','judul_materi','id_bidang'
    ];
}
