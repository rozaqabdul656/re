<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayarantfModel extends Model
{
    protected $table = 'tb_pembayaran_tf';
    protected $fillable = ['id_tf', 'id', 'id_bidang', 'gambar','keterangan'];
}
