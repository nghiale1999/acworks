<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\modeluser;
use App\modeltieuchi;

use App\modeldanhgia;

class admincontroller extends Controller
{
    public function getdashboard(){
        return view('admin.dashboard');
    }

    public function qlnhanvien(){
        $data = modeluser::all();
        return view('admin.qlnhanvien',compact('data'));
    }
    public function qlnhanviendelete($id){
        modeluser::where('id',$id)->delete();
        return redirect()->back()->with('success','xóa thanh cong');
    }
    public function qlnhanvienedit($id){
        $data = modeluser::where('id',$id)->get();

        return view('admin.editnhanvien',compact('data'));
    }
    public function qlnhanvieneditt(Request $request, $id){
        
        $user = modeluser::findOrFail($id);
        $data = $request->all();
        $data['chucvu'] = $request->chucvu;
        $data['name'] = $request->ten;
        if($user->update($data)){
            return redirect()->back()->with('success','edit thanh cong');      
        }else{
            return redirect()->back()->withErrors('edit that bai');
        }
        
    }
    public function qlnvadd(){
        return view('admin.addnhanvien');
    }

    public function qlnhanvienadd(Request $request){
        $data = new modeluser;
        $data->name = $request->ten;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->chucvu = $request->chucvu;
        $data->level = $request->level;
        if($data->save()){
            return redirect()->back()->with('success','add thanh cong');      
        }else{
            return redirect()->back()->withErrors('add that bai');
        }
    }

    public function qltieuchi(){
        $data = modeltieuchi::all();
        return view('admin.qltieuchi',compact('data'));
    }
    public function qltieuchidelete($id){
        modeltieuchi::where('id',$id)->delete();
        return redirect()->back()->with('success','xóa  thanh cong');
    }
    public function qltcadd(){
        return view('admin.addtieuchi');
    }
    public function qltieuchiadd(Request $request){
        $data = new modeltieuchi;
        $data->tentieuchi = $request->tentieuchi;
        $data->diem = $request->diem;
        
        if($data->save()){
            return redirect()->back()->with('success','add thanh cong');      
        }else{
            return redirect()->back()->withErrors('add that bai');
        }
    }


    public function cnd(){
        $nhanvien = modeluser::all();
        $tieuchi = modeltieuchi::all();
        return view('admin.capnhatdiem',compact('nhanvien','tieuchi'));
    }
    public function capnhatdiem(Request $request){
        $danhgia = new modeldanhgia;
        $danhgia['id_tc'] = $request->tieuchi;
        $danhgia['id_user'] = $request->nhanvien;
        $danhgia['created_at'] = $request->ngay;
        if($danhgia->save()){
            return redirect()->back()->with('success','danh gia thanh cong');      
        }else{
            return redirect()->back()->withErrors('danh gia that bai');
        }
    }
}
