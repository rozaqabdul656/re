<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesertaModel extends Model
{
	protected $table = 'users';
  
    protected $fillable = [
        'name', 'email', 'password','level','alamat','asal_sekolah','bidang','no_hp','konfirmasi'
    ];
}
