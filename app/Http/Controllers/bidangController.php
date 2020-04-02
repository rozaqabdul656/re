<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bidangModel;
use DB;
use File;
use Carbon\Carbon;
use Image;

class bidangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
	public function index(){
		$datas = bidangModel::get();
		$no=1;
        return view('bidang.index',compact('datas','no'));       
	}

	public function create(){

        return view('bidang.create');       
	}
	public function store(Request $request ){
	
        $this->validate($request,[
            'judul' => ['required'],
            'gambar' => ['required'],
        ]);

         $cover = NULL;
        



         if($request->file('gambar')) {

                $image = $request->file('gambar');
                $input['imagename'] = time().'.'.$image->extension();
             
                $destinationPath = public_path('images/paket-belajar');
                $img = Image::make($image->path());

                $img->encode('jpg', 75);    
                $img->resize(200,200);
                $img->save($destinationPath.'/'.$input['imagename']);

           
        }

        $soal = bidangModel::create([
                'bidang' => $request->get('judul'),
                'foto'=>$input['imagename']
                       ]);

        return redirect('paket-belajar');
	}
	 public function update(Request $request,$id)
    {
        $cover=NULL;
        if(empty($request->file('gambar'))){

             bidangModel::where('id_bidang','=',$id)->update([
                'bidang' => $request->get('bidang')
                ]);
       
       
        }
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move("images/paket-belajar", $fileName);
            $cover = $fileName;

             $gambar = bidangModel::where('id_bidang',$id)->first();
            File::delete('images/paket-belajar/'.$gambar->foto);
             bidangModel::where('id_bidang','=',$id)->update([
                'bidang' => $request->get('bidang'),
                'foto' => $cover
                ]);
       
      

        }
        
       
       
        return redirect('paket-belajar');

    }
    public function edit($id)
    {   
        $data = DB::table('tb_bidang')->where('id_bidang', '=', $id)->get();
        return view('bidang.edit', compact('data'));
    }        

    public function destroy($id)
    {
        
            $gambar = bidangModel::where('id_bidang',$id)->first();
          
            File::delete('images/paket-belajar/'.$gambar->file);

            // hapus data
            bidangModel::where('id_bidang',$id)->delete();


        return redirect('paket-belajar');
    }
}
