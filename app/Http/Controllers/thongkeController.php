<?php

namespace App\Http\Controllers;

use App\Models\thongkeModel;
use Illuminate\Http\Request;

class thongkeController extends Controller
{
    function thongke(){
        $rs=thongkeModel::thongke();
        // dd($rs);
        
        return view('admin.thongke.list',["dem1"=>$rs,]);
    }
}

