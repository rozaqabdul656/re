<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\materiModel;
use Carbon\Carbon;
use App\modelRangkuman;


class rangkumanController extends Controller
{
 	public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index(){

        $datas=db::table('tb_rangkuman')
              ->join('tb_bidang','tb_rangkuman.id_bidang','tb_bidang.id_bidang')
              ->join('tb_materi','tb_rangkuman.id_materi','tb_materi.id_materi')
              ->join('users','tb_rangkuman.id','users.id')
              ->groupBy('tb_rangkuman.id_bidang')
              ->groupBy('tb_materi.id_materi')
              ->orderBy('tb_id_rangkuman.id_rangkuman')
              ->get();
                return view('materi.detail-upload',compact('datas'));

      
    }

  public function rangkuman_upload($datam,$data){

       
          return view('materi.create-materi',compact('datam','data'));

    }

    public function daftar_rangkuman_upload(){

        $datas=db::table('tb_bidang')
              ->orderBy('id_bidang')
              ->get();
       
          return view('materi.daftar_grup',compact('datas'));

    }
	 public function store(Request $request){

	 	  $ids=Auth::user()->id;
       if ($request->file('rangkuman') == null) {
                alert()->error('Silahkan Inputkan Gambar');
      
                      return redirect()->back();
 
            }
      
          foreach ($request->file('rangkuman') as $data) {
            $dt = Carbon::now();
            $acak  = $data->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $data->move("images/materi/rangkuman", $fileName);
            $cover = $fileName;

              modelRangkuman::create([
                'rangkuman'=>$cover,
                'id'=>$ids,
                'id_bidang'=>$request->get('materi'),
                'id_materi'=>$request->get('materib')
                
            ]);  
          }

            $id_materi=$request->get('materi');
         
           return redirect('study/'.$id_materi);
 	}
 	public function show($id,$idx,$ids){
        $datas=db::table('tb_rangkuman')
              ->where('id',$id)
              ->where('id_bidang',$idx)
              ->where('id_materi',$ids)
              ->get();
     
        $no=1;

       return view('materi.detail-upload',compact('datas','no'));
     
 	}
 	public function detail($id){


        $datas=db::table('tb_rangkuman')
              ->join('tb_bidang','tb_rangkuman.id_bidang','tb_bidang.id_bidang')
               ->join('tb_materi','tb_rangkuman.id_materi','tb_materi.id_materi')
              ->join('users','tb_rangkuman.id','users.id')
              ->groupBy('tb_rangkuman.id')
              
              ->groupBy('tb_rangkuman.id_bidang')
              ->groupBy('tb_rangkuman.id_materi')
              
              ->orderBy('tb_rangkuman.id_rangkuman')
              ->where('tb_rangkuman.keterangan',' ')
              ->where('tb_rangkuman.id_bidang',$id)
              
              ->get();
              $no=1;
       	return view('materi.index',compact('datas','no'));

 	}

 	public function delete($id,$ids,$idx){
 			
        $datas=db::table('tb_rangkuman')
                ->where('id',$id)
                ->where('id_bidang',$ids)
                ->where('id_materi',$idx)
                ->delete();
       	return redirect()->back();
 	}
  public function ubah(request $request){
    $id=$request->get('id');
    $bidang=$request->get('bidang');
    $materi=$request->get('materi');
    $ket=$request->get('keterangan');



    modelRangkuman::where('id_bidang',$bidang)->where('id_materi',$materi)->where('id',$id)->update([
                'keterangan'=>$ket
            ]);  

     return redirect('/rangkuman-detail/'.$bidang);

  }
  public function indexuser(){
     $ids=Auth::user()->id;

        $datas=db::table('tb_rangkuman')
              ->join('tb_bidang','tb_rangkuman.id_bidang','tb_bidang.id_bidang')
              ->join('tb_materi','tb_rangkuman.id_materi','tb_materi.id_materi')
              ->join('users','tb_rangkuman.id','users.id')
              ->groupBy('tb_rangkuman.id_bidang')
              ->groupBy('tb_rangkuman.id_materi')
              ->orderBy('tb_rangkuman.id_rangkuman')
              ->where('tb_rangkuman.id',$ids)
              ->whereNotNull('tb_rangkuman.keterangan')
              ->get();
              $no=1;
        return view('materi.index-user',compact('datas','no'));

  }
}
