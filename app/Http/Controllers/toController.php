<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\tryoutModel;

class toController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
   public function index(request $request){
        $request->session()->put('cek','0');
      
    	$request->session()->put('nilai','0');
    	$request->session()->put('start_no','0');
        
    }

    public function go(request $request,$id,$ids){
    	$request->session()->put('cek','0');
      
    	$request->session()->put('nilai','0');
    	$request->session()->put('start_no','0');
        $data=DB::table('tb_soal')
        ->join('tb_bidang','tb_soal.id_bidang','tb_bidang.id_bidang')
        ->join('tb_try_out','tb_soal.id_try_out','tb_try_out.id_try_out')
        ->groupBy('tb_soal.id_try_out')
        ->where('tb_soal.id_bidang',$ids)

        ->where('tb_soal.id_try_out',$id)->get();

        return view('tryout.pilih_akses',compact('data'));      

    }

    public function akses(){
        return view('tryout.tolak-tryout');
    }

    public function hasil(Request $request){
                $akses=$request->session()->get('bidang');
       			$tam=$request->session()->get('to');
                $nilaifinal=$request->session()->get('nilai');
                $idanggota=Auth::user()->id;    
                tryoutModel::create([
                'id' => $idanggota,
                'id_bidang' =>$akses,
                'hasil' =>$nilaifinal,
                'id_try_out'=>$tam
                ]);
                return view('tryout.hasil',compact('nilaifinal'));
    }
    public function store(Request $request){
    	$jawaban=$request->get('jawaban');
    	$kunci=$request->get('kunci');
    	$nilai=$request->get('nilai');
    	$akses=$request->get('bidang');
    	$aksesto=$request->get('to');
    	
    	$request->session()->put('bidang',$akses);
    	$request->session()->put('to',$aksesto);
		$times=$request->get('waktu');
  		$request->session()->put('waktu',$times);
        
		$off=$request->get('off');
		$nomer=$request	->session()->get('start_no');
        
        
        
        if ($jawaban == $kunci && $jawaban !='') {
    		$nilai+=1;
    		$request->session()->put('nilai',$nilai);
 		}if ($jawaban !=$kunci && $jawaban !=''   && $nomer!=0) {
            $nilai-=0;
            $request->session()->put('nilai',$nilai);
        }
 		if ($nomer == $off && $nomer != 0){ 
 				$nilaifinal=$request->session()->get('nilai');
 				$idanggota=Auth::user()->id;	
 				tryoutModel::create([
                'id' => $idanggota,
                'id_bidang' =>$request->get('bidang'),
                'hasil' =>$nilaifinal,
                'id_try_out'=>$aksesto
               
                ]);

 				return view('tryout.hasil',compact('nilaifinal','off'));
    	}
    		return redirect()->route('tryout.create');
	}
	public function edit(Request $request){
	 	return redirect()->route('tryout.create');
	
 	}
	public function create(request $request){		
		$akses=$request->session()->get('bidang');
	   	$aksesto=$request->session()->get('to');
	   	
	   	$total_s = DB::table('tb_soal')->where('id_bidang',$akses)->where('id_try_out',$aksesto)->count();
	   	$nilai=$request->session()->get('nilai');
	   	$start_no=$request->session()->get('start_no');
	   	$start_off=$start_no;
        $redirek=gmdate("Y-m-d", time()+60*60*7);
        $keluar=$redirek."00:00:00";

        $idanggota=Auth::user()->id;    
        $meng = DB::table('tb_hasil')->where('id_bidang',$akses)->where('id_try_out',$aksesto)
                ->where('id',$idanggota)
        		->count('id_hasil');

            $tanggal= gmdate("Y-m-d", time()+60*60*7) ;
            $jamnow=gmdate("H:i:s", time()+60*60*7) ;
            $waktus = DB::table('tb_soal')->where('id_bidang',$akses)->where('id_try_out',$aksesto)->get();
            $timesn;
            foreach ($waktus   as $data) {
              
                $times=$data->waktu;
                $ti=$data->waktu;
                   
            }
         
        $kw = DB::table('tb_soal')
                ->where('id_bidang',$akses)->where('id_try_out',$aksesto)
                ->orderby('id_soal','asc')               
                ->where('id_bidang',$akses)
                ->get();
 
        $id=0;
        $cekm=$request->session()->get('cek');
        
        foreach ($kw as $da){
            $jawaban[$id]=$da->kunci;
            $id++;
        }
        
        if ($meng>=1) {
                return view('tryout.hasil');
        
        }
        else if ($start_no=='0' && $cekm=='0') {
          
           
	  		$datas = DB::table('tb_soal')
                ->where('id_bidang',$akses)
                ->orderby('id_soal','asc')               
                ->where('id_try_out',$aksesto)
	   		     ->limit(1)
                ->get();
	  	
	  			
	  	}else{
	  		$datas = DB::table('tb_soal')
                ->where('id_bidang',$akses)->where('id_try_out',$aksesto)
                ->orderby('id_soal','asc')               
                ->offset($request->session()->get('start_no'))
                ->limit('1')
                
                ->get();    
                $ti=$request->session()->get('waktu');
                      
	  	}
        
    $lempar=0;
   
     $request->session()->put('start_no',$start_off+1);
     return view('tryout.soal',compact('datas','start_no','akses','times','ti','total_s','aksesto'),compact('nilai'));
	}

   public function back(Request $request){
       $tam=$request->session()->get('start_no');
       if ($tam >1) {
          $tam-=2;
         
         $request->session()->put('start_no',$tam);
        }else{
            $tam-=1;
            $request->session()->put('start_no',$tam);
        }
             $request->session()->put('cek','1');
       
        return redirect()->route('tryout.create');


   } 

}
