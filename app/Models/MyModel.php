<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MyModel extends Model
{
    use HasFactory;


    static function getAll(){
        return DB::select("SELECT * FROM doctor");
    }

    static function getAll1(){
        return DB::select("SELECT * FROM chuyenmon");
    }

    static function insertProcess($id_doctor,$name_doctor,$doctor_email,$password,$doctor_date,$path,$gender,$address,$phone,$star,$doctor_degree,$doctor_export,$id_chuyenmon){
        return DB::insert("INSERT INTO `doctor`(`id_doctor`, `name_doctor`, `doctor_email`, `password`, `doctor_date`, `image`, `gender`, `address`, `phone`, `star`, `doctor_degree`, `doctor_export`, `id_chuyenmon`, `created_at`, `updated_at`) VALUES (NULL,'$name_doctor','$doctor_email',NULL,'$doctor_date','$path','$gender',',$address','$phone','$star','$doctor_degree','$doctor_export','$id_chuyenmon',NULL,NULL)");
    }

    static function deleteDoctor($id_doctor){
        $rs = DB::delete("DELETE FROM doctor WHERE id_doctor='$id_doctor'");
        return $rs;
    }

    static function getChuyenmon(){
        return DB::select("SELECT * FROM chuyenmon");
    }


    static function getchuyenmon11(){
        // dd(DB::select("SELECT * FROM chuyenmon"));
        return DB::select("SELECT * FROM chuyenmon");
    }

    static function insertProcess1($id_chuyenmon,$name){
        return DB::insert("INSERT INTO chuyenmon VALUE('$id_chuyenmon','$name')");
    }

    static function getDoctor($id_doctor){
        $doctors = DB::select("SELECT * FROM doctor WHERE id_doctor='$id_doctor'");
        return $doctors;
    }

    static function updateDoctor($id_doctor,$name_doctor,$doctor_email,$doctor_date,$image_name,$gender,$address,$phone,$star,$doctor_degree,$doctor_export,$id_chuyenmon){
        return DB::update("UPDATE `doctor` SET `name_doctor`='$name_doctor',`doctor_email`='$doctor_email',`doctor_date`='$doctor_date',`image`='$image_name',`gender`='$gender',`address`='$address',`phone`='$phone',`star`='$star',`doctor_degree`='$doctor_degree',`doctor_export`='$doctor_export',`id_chuyenmon`='$id_chuyenmon' WHERE id_doctor='$id_doctor'");
    }

    //update chuyên môn
    static function getChuyenmon112($id_chuyenmon){
        $chuyenmon = DB::select("SELECT * FROM chuyenmon WHERE id_chuyenmon='$id_chuyenmon'");
        return $chuyenmon;
    }

    static function updateChuyenmon1($id_chuyenmon,$name){
        return DB::update("UPDATE `chuyenmon` SET `id_chuyenmon`='$id_chuyenmon',`name`='$name' WHERE id_chuyenmon='$id_chuyenmon'");
    }
}
