<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\bidangModel;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idanggota=Auth::user()->id;    

        $data=DB::table('tb_pembayaran_tf')->where('id',$idanggota)
            ->groupBy('id_bidang')->orderBy('created_at','DESC')->get();  

        $datafree=DB::table('tb_pembayaran_ss')->where('id',$idanggota)
            ->groupBy('id_bidang')->orderBy('created_at','DESC')->get();  
            // var_dump($datafree);
            // die;
    
        $data1 = DB::table('tb_bidang')->OrderBy('created_at','DESC')->get();

        return view('home',compact('data1','data','datafree'));
    }

    public function showkonfirm(){
        $user = DB::table('tb_konfirmasi')->get();
 
        // mengirim data pegawai ke view index
        return view('showkonfirm',['user' => $user]);

    }
}
