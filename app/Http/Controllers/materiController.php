<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\materiModel;
use Carbon\Carbon;
use App\modelRangkuman;
use DB;


class materiController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index()
    {
   	    return view('materi.index');       

    }public function create(){
     
      $data=DB::table('tb_bidang')->get();

      return view('materi.create',compact('data'));
    }

    public function store(Request $request)
    {
        $file = $request->file('materi');
      // Mendapatkan Nama File
      $acak = $file->getClientOriginalName();
      $dt = Carbon::now();
      $nama_file = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
   
      // Mendapatkan Extension File
      $extension = $file->getClientOriginalExtension();
  
      // Mendapatkan Ukuran File
      $ukuran_file = $file->getSize();
   
      // Proses Upload File
      $file->move('images/materi/pdf',$nama_file);
            $soal = materiModel::create([
                'judul_materi'=>$request->get('judul'),
                'file'=>$nama_file,
                'id_bidang'=>$request->get('bidang')
            ]);       
        return redirect()->route('fitur-tryout.index');
    }


    public function update(Request $request,$id)
    {

          $ids=Auth::user()->id;

          foreach ($request->file['rangkuman'] as $data) {

            $dt = Carbon::now();
            $acak  = $data->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move("images/materi/gambar", $fileName);
            $cover = $fileName;

              modelRangkuman::create([
                'foto'=>$cover,
                'id'=>$ids,
                'id_materi'=>$id

            ]);  
          }





    }    

    public function destroy($id)
    {

   		   materiModel::where('id_materi','=',$id)->delete();
        
        return redirect()->back();
 
    }
    
}
