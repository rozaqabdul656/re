<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\pesertaModel;   
use DB;
class pesertaController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
    
        $id=$request->get('id');        
             pesertaModel::where('id',$id)->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'level' => 'USER',
             'alamat' => $request->get('alamat'),
            'no_hp' => $request->get('no_hp'),
            'asal_sekolah' => $request->get('asal_sekolah'),
            'akses' => $request->get('bidang'),
        ]);
            $no=0;
            return redirect()->route('/daftar-peserta');
    }

    public function show($id)
    {
        $data = DB::table('users')->where('id', '=', $id)->get();
        return view('tryout.editpeserta', compact('data'));
  
    }

    
    public function edit(request $request,$id)
    {
        }
    public function update(Request $request, $id)
    {
      

    }
public function destroy($id)
    {
        //
    }
}
