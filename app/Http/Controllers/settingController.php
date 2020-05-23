<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\dashboardModel;
use App\bidangModel;
use App\Soal;
use DB;
class settingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index(){
		    $datas3 = bidangModel::get();
        return view('setting',compact('datas3'));       
	
  }

	public function create(){
	     $datas=DB::table('tb_soal')
       ->join('tb_bidang','tb_soal.id_bidang','tb_bidang.id_bidang')
       ->join('tb_try_out','tb_soal.id_try_out','tb_try_out.id_try_out')
       ->groupBy('tb_soal.id_try_out')
       ->groupBy('tb_soal.id_bidang')->get();  

    
        return view('setting',compact('datas'));   

	}
	public function store(Request $request ){
	     $idto=array();
       $idb=array();
       $waktu=array();
       $idx=0;
       foreach ($request->get('id') as $id) {
          $idto[$idx]=$id;
          $idx++;
       }
       $idx=0;
       foreach ($request->get('idb') as $id) {
          $idb[$idx]=$id;
          $idx++;
       }
       $idx=0;
       foreach ($request->get('waktu') as $id) {
          
        Soal::where('id_bidang',$idb[$idx])->where('id_try_out',$idto[$idx])->update([
          'waktu'=>$id
        ]);
          $idx++;
       

       }
       


       alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect()->route('setting.create');
	} }
