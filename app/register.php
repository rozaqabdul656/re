<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
	protected $table = 'users';
  
    protected $fillable = [
        'name', 'email', 'password','level','alamat','asal_sekolah','akses','no_hp'
    ];
}
