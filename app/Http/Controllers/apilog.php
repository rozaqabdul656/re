<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

use Illuminate\Support\Facades\Hash;

use App\register;
class apilog extends Controller
{
    public $successStatus = 200;

    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
           $name= Auth::user()->name;
            return response()->json(['succes'=>$name],$this->successStatus);
        }
        else{
            return response()->json(['error'=>'error'], 401);
        }
   	}
/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
   	 public function register(Request $request)
    {


        // $validator=$this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required',
        //     'c_password' => 'required|same:password',
        //     'no_hp'=>'required',
        //     'asal_sekolah'=>'required',
        //     'alamat'=>'required'


        // ]);

         $validator = Validator::make($request->all(), [ 
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password',
            'no_hp'=>'required',
            'asal_sekolah'=>'required',
            'alamat'=>'required'
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);    
            }       
             // return response()->json(['error'=>Hash::make(request('password'))], 401);
 
        // if (request('email') == '' || request('password') == '' || request('c_password')=='' || request('no_hp')==''||request('name')=='' || request('alamat')=='') {
        //       return response()->json(['error'=>"Lengkapi Data"], 401);
        // }
        
        //  if (request('password') != request('c_password')) {
        //       return response()->json(['error'=>"Password Tidak Sama"], 401);
        // }

        
        if ($validator ->fails()) {
              return response()->json(['error'=>"Lengkapi Data"], 401);
            
        }
        // $input = $request->all();
        //   $data=$this->validate($request,[
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:6', 'confirmed'],
        //     'alamat' => ['required', 'string', 'min:3'],
        //     'no_hp' => ['required','min:6'],
        //     'asal_sekolah' => ['required', 'string', 'min:3'],
        //     'bidang' => ['required'],
             
        // ]);

                // return response()->json($validator);
  
        register::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'level' => 'USER',
            'alamat' => request('alamat'),
            'no_hp' => request('no_hp'),
            'asal_sekolah' => request('asal_sekolah'),
            'akses' => 'ALL',
        ]);
        

        // $input['password'] = bcrypt($input['password']);
        // $user = User::create($input);
        // $success['name'] =  $request->all();


        return response()->json(['success'=>"Sukses"], $this->successStatus);
    }


    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }
	
}
