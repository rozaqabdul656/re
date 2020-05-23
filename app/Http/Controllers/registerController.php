<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\Request;
use Auth;
use App\register;
class registerController extends Controller
{
  public function __construct()
    {
   //     $this->middleware('auth');
        
    }
   public function index(){
   		
        // if(Auth::user()->level == 'user') {
        //     return redirect()->to('/');
        // }
      return view('register');

   }
   public function peserta(){
      if(Auth::user()->level == 'user') {
            return redirect()->to('/');
        }
      $datas = DB::table('users')->where('level','=','USER')->get();
      $no=1;

      return view('tryout.peserta',compact('datas','no'));

   }

   public function store(Request $request){
   	 
   	  $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'alamat' => ['required', 'string', 'min:3'],
            'no_hp' => ['required','min:6'],
            'asal_sekolah' => ['required', 'string', 'min:3'],
            'bidang' => ['required'],
             
        ]);

   	  	register::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'level' => 'USER',
             'alamat' => $request['alamat'],
            'no_hp' => $request['no_hp'],
            'asal_sekolah' => $request['asal_sekolah'],
            'akses' => $request['bidang'],
        ]);
        
      
        alert()->success('Berhasil.','Sukses Registrasi');
        return redirect()->route('login');

   }
}
