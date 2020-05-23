<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class produkController extends Controller
{
    public function index(){

    	return view("produk.detail-produk");

    }
    public function detail($data){
        $datas=DB::table('tb_bidang')->where('id_bidang',$data)->get();
        $cm=DB::table('tb_modul')->where('id_bidang',$data)->count();
        $ct=DB::table('tb_soal')->where('id_bidang',$data)->count();
        $cv=DB::table('tb_tutorial')->where('id_bidang',$data)->count();
        
        foreach ($datas as $ce) {
            $bidang=$ce->bidang;
            $foto=$ce->foto;
            $id=$ce->id_bidang;
        }


        return view("produk.detail-produk",compact('ct','cm','bidang','cv','foto','id'));

    }

    public function modul(){

        $ids=Auth::user()->id;
        $data=DB::table('tb_pembayaran_ss')
                ->join('tb_bidang','tb_pembayaran_ss.id_bidang','tb_bidang.id_bidang')
                ->where('tb_pembayaran_ss.id',$ids)
                ->orderBy('tb_pembayaran_ss.id_bidang')
                ->groupBy('tb_pembayaran_ss.id_bidang')
                
                ->where('tb_pembayaran_ss.keterangan','konfirmasi')
                ->get();
        $datat=DB::table('tb_pembayaran_tf')
                ->join('tb_bidang','tb_pembayaran_tf.id_bidang','tb_bidang.id_bidang')
                ->orderBy('tb_pembayaran_tf.id_bidang')
                ->where('tb_pembayaran_tf.id',$ids)
                ->where('tb_pembayaran_tf.keterangan','konfirmasi')
                ->get();

    	return view ("produk.modul_belajar",compact('data','datat'));

    }
    public function belajar($id){
       $data=DB::table('tb_soal')->where('id_bidang','=',$id)->join('tb_try_out','tb_soal.id_try_out','=','tb_try_out.id_try_out')->groupBy('tb_soal.id_try_out')->orderBy('tb_soal.id_try_out')->get();
        $dat=DB::table('tb_bidang')->where('id_bidang',$id)->get();
        
        $datat=DB::table('tb_tutorial')->where('id_bidang','=',$id)->orderBy('id')->get();
        
        $dataf=DB::table('tb_materi')->where('id_bidang','=',$id)->orderBy('id_materi')->get();

    	return view ("produk.mulai-belajar",compact('data','dat','datat','dataf'));
    	
    }
    public function belajarfree($id){
       $data=DB::table('tb_soal')->where('id_bidang','=',$id)->join('tb_try_out','tb_soal.id_try_out','=','tb_try_out.id_try_out')->groupBy('tb_soal.id_try_out')->orderBy('tb_soal.id_try_out')->limit(1)->get();
        $dat=DB::table('tb_bidang')->where('id_bidang',$id)->get();
        
        return view ("produk.mulai-belajar-free",compact('data','dat'));
        
    }

    public function pembahasan(){

    	return view ("produk.pembahasan");	
    }


}
