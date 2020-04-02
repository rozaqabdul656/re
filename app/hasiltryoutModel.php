<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hasiltryoutModel extends Model
{	
	protected $table = 'tb_hasil';
    protected $fillable = ['id_hasil', 'id', 'id_bidang', 'hasil', 'keterangan'];

}
