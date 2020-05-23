<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
	protected $table = 'tb_soal';
    protected $fillable = ['id_soal', 'id_try_out','id_bidang', 'soal', 'option_a', 'option_b', 'option_c', 'option_d','option_e', 'kunci','petunjuk','pelajaran','pengecekan','gambar_soal','waktu'];

}
