<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembayarantfModel;
use Redirect;
use Carbon\Carbon;
use Auth;
use DB;

class pembayarantfController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index(){
    	return view();
   }

    public function detail($id,$idbidang){
        $ids=Auth::user()->id;
        
    	$data=DB::table('tb_pembayaran_tf')->where('id',$id)->where('id_bidang',$idbidang)->get();

		

    	$id = DB::table('tb_pembayaran_tf')->where('id',$id)->where('id_bidang',$idbidang)->get();

    	foreach($id as $ia ) {
    		$ids=$ia->id;
            $idb=$ia->id_bidang;
        }


    	return view('pembayaranss.detail-tf',compact('data','ids','idb'));
    }
    public function konfirmasi($id,$id_bidang){
   

        DB::table('tb_pembayaran_tf')->where('id',$id)->where('id_bidang',$id_bidang)->update(['keterangan'=> 'konfirmasi']);

    	   return redirect('pembayaran');

    }

     public function konfirmasiall(){
   

        DB::table('tb_pembayaran_tf')->update(['keterangan'=> 'konfirmasi']);
           alert()->success('Berhasil.','Semua Pembayaran Transfer Sukses Terkonfirmasi !');
 
           return redirect('pembayaran');

    }

    public function hapus($id,$id_bidang){
   


        pembayarantfModel::where('id','=',$id)->where('id_bidang',$id_bidang)->delete();

        alert()->success('Berhasil.','Data telah dihapus!');


           return redirect('pembayaran');

    }

    public function store(Request $request){
        $ids=Auth::user()->id;
        $idb=$request->get('bidang');
           
        $tams=DB::table('tb_pembayaran_tf')

            ->where('id',$ids)

            ->where('id_bidang',$idb)
        ->get();
        $ta=1;
        foreach ($tams as $ta) {
            $tam=$ta->id;
            $ta=0;
        }
        if ($ta != 1) {
            alert()->error('Sialhkan Tunggu Konfirmasi Yang Dilakukan Admin','Anda Sudah Mengirim Pembayaran Ini');
            return Redirect::back();
        }else{

          foreach ($request->file('tf') as $data) {

            $dt = Carbon::now();
            $acak  = $data->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $data->move("images/pembayaran/transfer", $fileName);
            $cover = $fileName;

              pembayarantfModel::create([
                'gambar'=>$cover,
                'id'=>$ids,
                'id_bidang'=>$request->get('bidang'),
                'keterangan'=>"not" 
            ]);

          }
            alert()->success('Sukses Dikirim');
            return redirect('/home');
        }
    }
}
