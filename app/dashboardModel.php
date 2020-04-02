<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dashboardModel extends Model
{

	protected $table = 'tb_hasil';
    protected $fillable = ['id_hasil', 'id', 'id_bidang', 'hasil', 'keterangan'];
}
