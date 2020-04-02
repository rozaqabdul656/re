<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\videoModel;
use Alert;
use Redirect;


class videoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index(){

    	$data=   DB::table('tb_tutorial')
    			 ->join('tb_bidang', 'tb_bidang.id_bidang', '=', 'tb_tutorial.id_bidang')
    			 ->orderBy('tb_tutorial.id_bidang')->get();
    	$no=1;
    	return view('video.index',compact('data','no'));


    }
    public function create(){
    	$data=DB::table('tb_bidang')->get();
    	
    	return view('video.create',compact('data'));
    }

    public function store(Request $request){

        $request->validate([
            'file' => 'required',
        ]);
       $fileName = time().'.'.request()->file->getClientOriginalExtension();
 
       $request->file->move(public_path('videos/tutorial'), $fileName);
     
       $soal = videoModel::create([
                'id_bidang' => $request->get('bidang'),
                'judul' => $request->get('judul'),
                'video' => $fileName
            ]);

       $bidang=$request->get('bidang');
      // alert()->success('Message', 'Sukses Di Upload ');
      return response()->json(['success'=>'You have successfully upload file.']);
       // return redirect('fitur-tryout/detail/'.$bidang);

     }

  	public function destroy($id){
  		   videoModel::where('id','=',$id)->delete();
     	alert()->success('Message', 'Sukses Di Delete');

        return Redirect::back();
   	}

    public function tampil($id){
      $datas=DB::table('tb_tutorial')->where('id',$id)->get();

      return view('video.tampil-video',compact('datas'));
    }
}
