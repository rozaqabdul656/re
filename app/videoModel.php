<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videoModel extends Model
{
	protected $table = 'tb_tutorial';
    protected $fillable = ['id', 'id_bidang', 'judul', 'video'];

}
