<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Soal;
use App\User;
use Auth;
use DB;


class soalController_2 extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index()
    {
        if(Auth::user()->level == 'USER') {
            return redirect()->to('/');
        }
        $no=1;
        $datas = DB::table('tb_soal')
                ->join('tb_mapel', 'tb_mapel.pelajaran', '=', 'tb_soal.pelajaran')
                ->orderby('tb_soal.pelajaran','asc')
               
                ->where('id_bidang','2')->get();

        return view('soal.index',compact('datas','no'));
    }

     
  
}
