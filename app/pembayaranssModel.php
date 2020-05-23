<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaranssModel extends Model
{
    	protected $table = 'tb_pembayaran_ss';
    protected $fillable = ['id_ss', 'id', 'id_bidang', 'gambar','keterangan'];
}
