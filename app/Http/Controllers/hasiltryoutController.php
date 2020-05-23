<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use App\tryoutModel;

class hasiltryoutController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index(){

    	// $datas = tryoutModel::get()->where('id_bidang','1');
         $ids=Auth::user()->id;
       
    	$datas = DB::table('tb_hasil')
            ->join('users', 'users.id', '=', 'tb_hasil.id')
            ->join('tb_bidang','tb_hasil.id_bidang','tb_bidang.id_bidang')
            ->join('tb_try_out','tb_hasil.id_try_out','tb_try_out.id_try_out')
            ->groupBy('tb_hasil.id_bidang')
            ->orderBy('tb_hasil.id_try_out')
            ->where('tb_hasil.id',$ids)
         	->get();
         $no=1;
         $con = DB::table('tb_soal')->select(DB::raw('count(id_bidang) as jumlah,id_bidang,id_try_out'))
                ->groupBy('tb_soal.id_bidang')
                ->groupBy('tb_soal.id_try_out')

                ->get();
               
    	return view('tryout.hasiltryout',compact('datas','no','nos','con'));
    }
    public function store(Request $request){
 		$id=$request->get('id');
	   	
		tryoutModel::where('id_hasil','=',$id)->update([
             	'keterangan' => $request->get('keterangan')
                ]);

		  return redirect()->route('hasiltryout.index');

    }
}
