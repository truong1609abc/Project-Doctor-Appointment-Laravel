<?php

namespace App\Http\Controllers;

use App\Models\DoctorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    function getAllDoctor(){
        return view('doctor.list.list',['doctor'=>DoctorModel::getAllDoctor()]);
    }
    
    function Completed($id){

        $rs = DoctorModel::Completed($id);
        
        if($rs==false){
            return "Complete thất bại";
        }else{
            return view('doctor/list/list',['doctor'=>DoctorModel::getAllDoctor()]);      
        }
    }

    function getAllAppointment(){
        return view('admin.cuochen.list',['doctor'=>DoctorModel::getAllAppointment()]);
    }

    function Approved($id){

        $rs = DoctorModel::Approved($id);
        
        if($rs==false){
            return "Approve thất bại";
        }else{
            return view('admin/cuochen/list',['doctor'=>DoctorModel::getAllAppointment()]);      
        }
    }
}


