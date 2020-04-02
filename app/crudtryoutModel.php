<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crudtryoutModel extends Model
{
    
	protected $table = 'tb_try_out';
    protected $fillable = ['id_try_out', 'try_out'];

}
