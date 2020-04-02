<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Soal;
use App\User;
use Auth;
use DB;
use Redirect;


class soalController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index()
    {
        $data1 = DB::table('tb_bidang')->get();
        return view('soal.soal-paket',compact('data1'));
    }

     
    
    public function edits()
    {
        if(Auth::user()->level == 'USER') {
            return redirect()->to('/');
        }
        $datas = Soal::get();

        return view('soal.index', compact('datas'));

    }
    public function edit($id)
    {   
        $data = DB::table('tb_soal')->where('id_soal', '=', $id)->get();
        $datab=DB::table('tb_bidang')->get();
        $datat=DB::table('tb_try_out')->get();
        
        return view('soal.edit', compact('data','datab','datat'));
    }


    public function create()
    {

        $data=DB::table('tb_bidang')->get();
        $data1=DB::table('tb_try_out')->get();


        return view('soal.create',compact('data','data1'));
    }
    public function store(Request $request)
    {
         $cover = NULL;
           
        $this->validate($request, [
            'jenis_soal' => 'required',
            'kunci_jawaban' => 'required',

        ]);
         if($request->file('gambar')) {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move("images/soal", $fileName);
            $cover = $fileName;
        }if($request->get('pengecekan')=='ya'){
            if($request->file('option_af')) {
                $file = $request->file('option_af');
                $dt = Carbon::now();
                $acak  = $file->getClientOriginalExtension();
                $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
                $request->file('option_af')->move("images/soal", $fileName);
                $option_af = $fileName;
           }if($request->file('option_bf')) {
                $file = $request->file('option_bf');
                $dt = Carbon::now();
                $acak  = $file->getClientOriginalExtension();
                $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
                $request->file('option_bf')->move("images/soal", $fileName);
                $option_bf = $fileName;
           }if($request->file('option_cf')) {
                $file = $request->file('option_cf');
                $dt = Carbon::now();
                $acak  = $file->getClientOriginalExtension();
                $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
                $request->file('option_cf')->move("images/soal", $fileName);
                $option_cf = $fileName;
           }if($request->file('option_df')) {
                $file = $request->file('option_df');
                $dt = Carbon::now();
                $acak  = $file->getClientOriginalExtension();
                $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
                $request->file('option_df')->move("images/soal", $fileName);
                $option_df = $fileName;
           }if($request->file('option_ef')) {
                $file = $request->file('option_ef');
                $dt = Carbon::now();
                $acak  = $file->getClientOriginalExtension();
                $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
                $request->file('option_ef')->move("images/soal", $fileName);
                $option_ef = $fileName;
           }
             $soal = Soal::create([
                'soal' => $request->get('soal'),
                'option_a' => $option_af,
                'option_b' => $option_bf,
                'option_c' => $option_cf,
                'option_d' => $option_df,
                'option_e' => $option_ef,
                'id_bidang' => $request->get('jenis_soal'),
                'petunjuk' => $request->get('petunjuk'),
                'id_try_out'=>$request->get('pelajaran'),
                'pengecekan'=>$request->get('pengecekan'),
                'kunci' => $request->get('kunci_jawaban'),
                'gambar_soal'=>$cover
            ]);
              
        }else {
              $soal = Soal::create([
                'soal' => $request->get('soal'),
                'option_a' => $request->get('option_a'),
                'option_b' => $request->get('option_b'),
                'option_c' => $request->get('option_c'),
                'option_d' => $request->get('option_d'),
                'option_e' => $request->get('option_e'),
                'id_bidang' => $request->get('jenis_soal'),
                'petunjuk' => $request->get('petunjuk'),
                'id_try_out'=>$request->get('pelajaran'),
                'pengecekan'=>$request->get('pengecekan'),
                'kunci' => $request->get('kunci_jawaban'),
                'gambar_soal'=>$cover
            ]);

        }

      
      
                alert()->success('Message', 'Sukses Di Tambahkan');
                return redirect()->route('fitur-tryout.create');

    }

    public function update(Request $request,$id)
    {
        $data = DB::table('tb_soal')->leftJoin('tb_bidang', 'tb_bidang.id_bidang', '=', 'tb_soal.id_bidang')
        ->where('id_soal', '=', $id)->get();
        foreach ($data as $data ) {
          $gambar_soal=$data->gambar_soal;
          $opa=$data->option_a;
          $opb=$data->option_b;
          $opc=$data->option_c;
          $opd=$data->option_d;
          $ope=$data->option_e;
                  
        }
        $cek=0;
        $pengecekan=$request->get('pengecekan');
        $cover=NULL;
        if(empty($request->file('gambar'))){
            $cover = $gambar_soal;
        }
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move("images/soal", $fileName);
            $cover = $fileName;
        }if($request->file('option_af')) {
            $file = $request->file('option_af');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('option_af')->move("images/soal", $fileName);
            $opa = $fileName;
        }if($request->file('option_bf')) {
            $file = $request->file('option_bf');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('option_bf')->move("images/soal", $fileName);
            $opb = $fileName;
        }if($request->file('option_cf')) {
            $file = $request->file('option_cf');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('option_cf')->move("images/soal", $fileName);
            $opc = $fileName;
        }if($request->file('option_df')) {
            $file = $request->file('option_df');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('option_df')->move("images/soal", $fileName);
            $opd = $fileName;
        }if($request->file('option_ef')) {
            $file = $request->file('option_ef');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('option_ef')->move("images/soal", $fileName);
            $opd = $fileName;
        }
        

            Soal::where('id_soal','=',$id)->update([
                'soal' => $request->get('soal'),
                'option_a' => $opa,
                'option_b' => $opb,
                'option_c' => $opc,
                'option_d' => $opd,
                'option_e' => $ope,
                'kunci' => $request->get('kunci'),
                'id_bidang' => $request->get('bidang'),
                'id_try_out'=>$request->get('pelajaran'),
                'gambar_soal'=>$cover
                ]);
       
        $bidang=$request->get('bidang');
        $to=$request->get('pelajaran');
        
           alert()->success('Berhasil.','Data telah di Update!');
        return redirect('fitur-tryout/detail/'.$bidang.'/'.$to);

    }

   public function destroy($id)
    {
        Soal::where('id_soal','=',$id)->delete();
        alert()->success('Berhasil.','Data telah dihapus!');
         return Redirect::back();
    }

    public function detail($id){
        $data=soal::where('id_bidang','=',$id)->join('tb_try_out','tb_soal.id_try_out','=','tb_try_out.id_try_out')->groupBy('tb_soal.id_try_out')->orderBy('tb_soal.id_try_out')->get();
        $dat=DB::table('tb_bidang')->where('id_bidang',$id)->get();

        $datat=DB::table('tb_tutorial')->where('id_bidang','=',$id)->orderBy('id')->get();

        $dataf=DB::table('tb_materi')->where('id_bidang','=',$id)->orderBy('id_materi')->get();
        return view('soal.pilih-tryout',compact('data','dat','datat','dataf'));
    } 
    public function indexsoal($id,$ids){
        $datas=soal::where('id_bidang','=',$id)->where('id_try_out','=',$ids)->orderBy('id_soal')->get();
        $no=1;

        $dat=DB::table('tb_bidang')->where('id_bidang',$id)->get();        
        $data=DB::table('tb_try_out')->where('id_try_out',$ids)->get();        
        foreach ($dat as $bidang) {
              $paket=$bidang->bidang;
        }
        foreach ($data as $tos) {
            $to=$tos->try_out;
         }     
        return view('soal.index',compact('datas','no','paket','to'));  
    }    

}
