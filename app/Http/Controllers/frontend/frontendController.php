<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\modeluser;
use App\modeltieuchi;
use App\modeldanhgia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class frontendController extends Controller
{
    public function lg(){
        return view('frontend.login');
    }
    public function login(Request $request){
        $login =[
            'email' => $request->mail,
            'password' => $request->password,
            
        ];  

        if(Auth::attempt($login)){
            return redirect('frontend/home');
        }else{
            return redirect()->back()->withErrors('email hoac password bi sai');
        }
    }

    public function home(){
        $data = DB::table('danhgia',) ->join('users', 'users.id', '=', 'danhgia.id_user')->join('tieuchi', 'tieuchi.id', '=', 'danhgia.id_tc')->select('users.name', 'users.email','users.chucvu','tieuchi.tentieuchi','tieuchi.diem', 'danhgia.created_at')->get();
        
        return view('frontend.home',compact('data'));
    }
    public function hometimkiem(Request $request){
        $a = $request->ngay;
        $ngay = new Carbon($a);


        $data = DB::table('danhgia',) ->join('users', 'users.id', '=', 'danhgia.id_user')->join('tieuchi', 'tieuchi.id', '=', 'danhgia.id_tc')->select('users.name', 'users.email','users.chucvu','tieuchi.tentieuchi','tieuchi.diem', 'danhgia.created_at')->where('danhgia.created_at',$ngay)->get();
        
        return view('frontend.home',compact('data'));
    }
}
