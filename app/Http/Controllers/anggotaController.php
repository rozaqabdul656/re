<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\Request;
use App\pesertaModel;

class anggotaController extends Controller
{
    public function show($id)
    {
        $data = DB::table('users')->where('id', '=', $id)->get();
        return view('tryout.editpeserta', compact('data'));
  
    }

    
    public function update(request $request,$id)
    {
          pesertaModel::where('id',$id)->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'level' => 'USER',
             'alamat' => $request->get('alamat'),
            'no_hp' => $request->get('no_hp'),
            'asal_sekolah' => $request->get('asal_sekolah'),
            'akses' => $request->get('bidang'),
        ]);
           	$datas = DB::table('users')->where('level','=','USER')->get();
      		$no=1;

      return view('tryout.peserta',compact('datas','no'));

    }
 	public function store(request $request)
    {	
    	    $id= $request->get('id');
        
          pesertaModel::where('id',$id)->update([
            'password' => Hash::make($request->get('password'))
           ]);
           	$datas = DB::table('users')->where('level','=','USER')->get();
      		$no=1;

      return view('tryout.peserta',compact('datas','no'));

    }
     
     public function destroy($id)
    { 
         
      pesertaModel::where('id','=',$id)->delete();
              $datas = DB::table('users')->where('level','=','USER')->get();
          $no=1;


      return view('tryout.peserta',compact('datas','no'));

    }  
}
