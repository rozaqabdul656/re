<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\crudtryoutModel;
use DB;
class crudtryoutController extends Controller
{
    
 public function __construct()
    {
        $this->middleware('auth');
        
    }

	public function index(){
		$data=DB::table('tb_try_out')->get();
		$no=1;
		return view('crudtryout.index',compact('data','no'));
	}

	public function create(){
		return view('crudtryout.create');
	}

	public function store(Request $request){

        $this->validate($request,[
            'tryout' => ['required']
         ]);

		crudtryoutModel::create([
                'try_out' => $request->get('tryout')
            ]);
			alert()->success('Message', 'Sukses Di Tambahkan');

		  return redirect('/jenis-tryout');
	}

	public function destroy($id){
		$data=DB::table('tb_try_out')->where('id_try_out',$id)->delete();
			alert()->success('Message', 'Sukses Di Hapus');

		return redirect('/jenis-tryout');

	}

	public function edit($id){
		$data=DB::table('tb_try_out')->where('id_try_out',$id)->get();

		return view('crudtryout.edit',compact('data'));

	}


    public function update(Request $request,$id)
    {

        $this->validate($request,[
            'try_out' => ['required']
         ]);

            crudtryoutModel::where('id_try_out','=',$id)->update([
                'try_out' => $request->get('try_out')
                ]);
       
      
       	alert()->success('Message', 'Sukses Di Edit');
		 return redirect('/jenis-tryout');


    }



}
