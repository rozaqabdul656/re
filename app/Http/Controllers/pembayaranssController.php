<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembayaranssModel;
use DB;
use Redirect;
use Carbon\Carbon;
use Auth;
class pembayaranssController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index(){
    	$no=1;
    	$data=DB::table('tb_pembayaran_ss')
    		  ->join('tb_bidang','tb_pembayaran_ss.id_bidang','=','tb_bidang.id_bidang')
    		  ->join('users','tb_pembayaran_ss.id','=','users.id')
    		  ->groupBy('tb_pembayaran_ss.id')
          ->groupBy('tb_pembayaran_ss.id_bidang')
          
          ->where('tb_pembayaran_ss.keterangan','=','not')
    		  ->get();

    	$no=1;
    	$datas=DB::table('tb_pembayaran_tf')
    		  ->join('tb_bidang','tb_pembayaran_tf.id_bidang','=','tb_bidang.id_bidang')
    		  ->join('users','tb_pembayaran_tf.id','=','users.id')
          ->groupBy('tb_pembayaran_tf.id')
          ->groupBy('tb_pembayaran_tf.id_bidang')
          
          ->where('tb_pembayaran_tf.keterangan','=','not')
             
    		  ->get();	  

        $datadone=DB::table('tb_pembayaran_tf')
              ->join('tb_bidang','tb_pembayaran_tf.id_bidang','=','tb_bidang.id_bidang')
              ->join('users','tb_pembayaran_tf.id','=','users.id')
              ->groupBy('tb_pembayaran_tf.id')
              ->groupBy('tb_pembayaran_tf.id_bidang')
          
               ->where('tb_pembayaran_tf.keterangan','=','konfirmasi')
              ->get();    
        $datafree=DB::table('tb_pembayaran_ss')
              ->join('tb_bidang','tb_pembayaran_ss.id_bidang','=','tb_bidang.id_bidang')
              ->join('users','tb_pembayaran_ss.id','=','users.id')
              ->groupBy('tb_pembayaran_ss.id')
          ->groupBy('tb_pembayaran_ss.id_bidang')
          
                  ->where('tb_pembayaran_ss.keterangan','=','konfirmasi')
            
              ->get();    

    	$nos=1;
    	return view('pembayaranss.index',compact('data','no','datas','nos','datadone','datafree'));
    }

    public function detail($id,$idbidang){
    	$data=DB::table('tb_pembayaran_ss')->where('id','=',$id)->where('id_bidang',$idbidang)->get();
		

    	$id = DB::table('tb_pembayaran_ss')->where('id','=',$id)->where('id_bidang',$idbidang)->get();
    
    	foreach($id as $ia ) {
    		$ids=$ia->id;
        $idb=$ia->id_bidang;
        }


    	return view('pembayaranss.detail',compact('data','ids','idb'));
    }
    public function konfirmasi($id,$id_bidang){

       DB::table('tb_pembayaran_ss')->where('id',$id)->where('id_bidang',$id_bidang)->update(['keterangan'=> 'konfirmasi']);



    	   return redirect('pembayaran');

    }
      public function konfirmasiall(){
   

        DB::table('tb_pembayaran_ss')->update(['keterangan'=> 'konfirmasi']);
           alert()->success('Berhasil.','Semua Pembayaran Screenshoot Sukses Terkonfirmasi !');
 
           return redirect('pembayaran');

    }
     public function hapus($id,$id_bidang){
   


        pembayaranssModel::where('id','=',$id)->where('id_bidang',$id_bidang)->delete();
        
        alert()->success('Berhasil.','Data telah dihapus!');


           return redirect('pembayaran');

    }

    public function store(Request $request){
     	$ids=Auth::user()->id;
    	
    	$tam=DB::table('tb_pembayaran_ss')->where('id',$ids)->get();
      var_dump($tam);
      $cekdata=null;
      foreach ($tam as $key ) {
        $cekdata=$key->id;
      }

    	if ($cekdata != null) {
    		alert()->error('Anda Sudah Mengirim Pembayaran Ini');
         	return Redirect::back();
  		}else{

          foreach ($request->file('ss') as $data) {

            $dt = Carbon::now();
            $acak  = $data->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $data->move("images/pembayaran/free", $fileName);
            $cover = $fileName;

              pembayaranssModel::create([
                'gambar'=>$cover,
                'id'=>$ids,
                'id_bidang'=>$request->get('bidang'),
                'keterangan'=>"not"	
            ]);

          }
        	alert()->success('Message', 'Sukses Dikirim');
	 		return redirect('/home');
	 	}
    
	}

}
