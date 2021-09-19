<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    function getAll(){
        return view('admin.user.list',['doctor'=>MyModel::getAll()]);
    }

    function insertProcess(Request $request){
        $id_doctor = $request->input('id_doctor');
        $name_doctor = $request->input('name_doctor');
        $doctor_email = $request->input('doctor_email');
        $password = $request->input('password');
        $doctor_date = $request ->input('doctor_date');

        $fileName = time().".".$request->file('image')->extension();
    
        $request->file('image')->storeAs('public',$fileName);

        $path = 'storage/'.$fileName;

        $gender = $request ->input('gender');
        $address = $request->input('address');
        $phone = $request ->input('phone');
        $star = $request->input('star');
        $doctor_degree = $request->input('doctor_degree');
        $doctor_export = $request->input('doctor_export');
        $id_chuyenmon = $request ->input('id_chuyenmon');
        

       

        $rs = MyModel::insertProcess($id_doctor,$name_doctor,$doctor_email,$password,$doctor_date,$path,$gender,$address,$phone,$star,$doctor_degree,$doctor_export,$id_chuyenmon);

        if($rs == true){
            return redirect('assets/user/list');
        }
        else{
            return "Insert that bai";
        }
    }

    function deleteDoctor($id_doctor){
        $rs = MyModel::deleteDoctor($id_doctor);

        if($rs != 0){
            return redirect('assets/user/list');
        }
        else{
            return "Không có bác sĩ có id=$id_doctor";
        }
    }

    function getChuyenmon(){
        return view('admin/user/create',['chuyenmon'=>MyModel::getChuyenmon()]);
        
    }

    

    function getAll1(){
        return view('admin.chuyenmon.list',['chuyenmon1'=>MyModel::getAll1()]);
    }

    function insertProcess1(Request $request){
        $id_chuyenmon = $request->input('id_chuyenmon');
        $name = $request->input('name');

        $rs = MyModel::insertProcess1($id_chuyenmon,$name);
        if($rs == true){
            return redirect('assets/chuyenmon/list');
        }
        else{
            return "Insert that bai";
        }
    }

    function getDoctor($id_doctor){
        $doctor = MyModel::getDoctor($id_doctor)[0];
        return view('admin.user.edit',['doctor'=>$doctor,'chuyenmon2'=>MyModel::getchuyenmon11()]);
    }

    function updateDoctor(Request $request,$id_doctor){
        
        $name_doctor = $request->input('name_doctor');
        $doctor_email = $request->input('doctor_email');
        
        $doctor_date = $request ->input('doctor_date');
        $gender = $request ->input('gender');
        $address = $request->input('address');
        $phone = $request ->input('phone');
        $star = $request->input('star');
        $doctor_degree = $request->input('doctor_degree');
        $doctor_export = $request->input('doctor_export');
        $id_chuyenmon = $request ->input('id_chuyenmon');


        $image_name = $request->hidden_image;
        $image = $request->file('image');
         if($image != '')
         {
             $image_name = rand().'.'.$image->getClientOriginalExtension();
             $image->move(public_path('images'));
         }

       

        $rs = MyModel::updateDoctor($id_doctor,$name_doctor,$doctor_email,$doctor_date,$image_name,$gender,$address,$phone,$star,$doctor_degree,$doctor_export,$id_chuyenmon);

        if($rs == true){
            return redirect('assets/user/list');
        }
        else{
            return "Insert that bai";
        }
    }
    //update chuyên môn
    
    function getChuyenmon112($id_chuyenmon){
        $chuyenmon = MyModel::getChuyenmon112($id_chuyenmon)[0];
        return view('admin.chuyenmon.edit',['chuyenmon'=>$chuyenmon]);
    }

    function updateChuyenmon1(Request $request,$id_chuyenmon){
        
        $id_chuyenmon = $request->input('id_chuyenmon');
        $name = $request->input('name');
        
      

        

       

        $rs = MyModel::updateChuyenmon1($id_chuyenmon,$name);

        if($rs == true){
            return redirect('assets/chuyenmon/list');
        }
        else{
            return "Update that bai";
        }
    }
    
}
