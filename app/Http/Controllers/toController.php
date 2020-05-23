<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\tryoutModel;

class toController extends Controller
{
    public $jawabanuser= array();
    public $kuncijawabanuser= array();
    
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
        $toobj=new toController();
        $toobj->jawabanuser[]=null;
        $toobj->kuncijawabanuser[]=null;
        
        
       $request->session()->put('objekto',$toobj);
        
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
                 $toobj=$request->session()->get('objekto');
                 $jawabanuserfinal=$toobj->jawabanuser;
                 $kuncijawabanuser=$toobj->kuncijawabanuser;
         
                 $request->session()->put('objekto',$toobj);
                 $nilaifinal=0;
                 for ($i=0; $i < count($jawabanuserfinal) ; $i++) { 
                        
                        if ($jawabanuserfinal[$i] == $kuncijawabanuser[$i]) {
                            $nilaifinal+=1;
                        }

                    }   


                $akses=$request->session()->get('bidang');
       			$tam=$request->session()->get('to');
                $idanggota=Auth::user()->id;    
                tryoutModel::create([
                'id' => $idanggota,
                'id_bidang' =>$akses,
                'hasil' =>$nilaifinal,
                'id_try_out'=>$tam
                ]);
                $con = DB::table('tb_soal')->select(DB::raw('count(id_bidang) as jumlah'))
                ->groupBy('tb_soal.id_bidang')
                ->groupBy('tb_soal.id_try_out')
                ->where('id_bidang',$akses)
                ->where('id_try_out',$tam)
                ->get();

                 foreach ($con as $data ) {
                        $jumlah=$data->jumlah;
                    }   
                 $nilaifinal=($nilaifinal/$jumlah)* 100;

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

        $toobj=$request->session()->get('objekto');

        if ($nomer >=1) {
            $toobj->jawabanuser[$nomer-1]=$jawaban;
            $toobj->kuncijawabanuser[$nomer-1]=$kunci;
         
            $request->session()->put('objekto',$toobj);
              
         }

 		if ($nomer == $off && $nomer != 0){ 
            return redirect()->action('toController@hasil');
    
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
        
            $objekto =$request->session()->get('objekto');
            $tamobjekisi=$objekto->jawabanuser;  
             
            if ($start_no >0) {
                if (count($tamobjekisi)  == $start_off) {
                    $toobj=null; 
                  }else{
                       $toobj=$tamobjekisi[$start_no];
                    
                  }
              }else{
                 $toobj=$tamobjekisi[0];
              }  
        $idanggota=Auth::user()->id;    
        $meng = DB::table('tb_hasil')->where('id_bidang',$akses)->where('id_try_out',$aksesto)
                ->where('id',$idanggota)
        		->count('id_hasil');
            $waktus = DB::table('tb_soal')
                      ->where('id_bidang',$akses)
                      ->where('id_try_out',$aksesto)->get();
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
                  return redirect()->action('toController@hasil');
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
     return view('tryout.soal',compact('datas','start_no','akses','times','ti','total_s','aksesto','toobj'),compact('nilai'));
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

   public function tampilnilai(Request $request){
       $data=DB::table('tb_try_out')->get();
        return view('tryout.list_nilai',compact('data'));

   } 

   public function tampilnilaidetail($id){
       $data=DB::table('tb_hasil')
       ->join('users','tb_hasil.id','users.id')
       ->join('tb_bidang','tb_hasil.id_bidang','tb_bidang.id_bidang')
       ->where('tb_hasil.id_try_out',$id)
       ->orderby('tb_hasil.hasil','desc')
       ->get();


       $to=DB::table('tb_try_out')
            ->where('id_try_out',$id)
            ->get();

        $jumlahsoal = DB::table('tb_soal')->select(DB::raw('count(id_bidang) as jumlah'))
                ->groupBy('tb_soal.id_bidang')
                ->where('id_try_out',$id)
                ->limit('1')
                ->get();
    
        foreach ($jumlahsoal as $datajum) {
            $jumlahsoalfinal=$datajum->jumlah;
        }
       foreach ($to as $tos ) {
           $tryout=$tos->try_out;
       }

        return view('tryout.list_detail_nilai',compact('data','tryout','jumlahsoalfinal'));

   } 
}
