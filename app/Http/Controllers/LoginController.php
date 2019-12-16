<?php

namespace App\Http\Controllers;
use App\pasien;
use DB;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
         if(!$request->session()->has('pasien')){
            return view('main.login');
         }else{
             return redirect()->route('antri.main');
         }
        
    }

    public function check(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
      
        if(!$request->session()->has('pasien')){
            $data = DB::table('pasiens')
            ->where('username','=',$username)
            ->where('password','=',$password)->get();
        // dd($data);
            if($data->isEmpty()){
            redirect('login');
            }else{
                $request->session()->put('pasien',$data);
                $get = $request->session()->get('pasien'); 
                return redirect()->route('antri.main',compact('get'));
            
            }

        }else{
            return redirect()->route('antri.main');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
