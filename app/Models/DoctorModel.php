<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DoctorModel extends Model
{
    
    use HasFactory;
    protected $table = 'appointment';
    static function getAllDoctor(){
        // return DB::select("SELECT * FROM appointment");
        return DoctorModel::join('doctor','appointment.id_doctor','doctor.id_doctor')
                            ->join('users','appointment.id_user','users.id')
                            ->select('appointment.*','doctor.name_doctor','users.name')
                            ->get();
        // SELECT * FROM `appointment` INNER JOIN doctor ON appointment.id_doctor=doctor.id_doctor INNER JOIN users ON appointment.id_user=users.id_users
    }

    static function Completed($id){
            return DB::table('appointment')
            ->where('id', $id)
            ->update(['status' => 'completed']);
    }

    static function getAllAppointment(){
        // return DB::select("SELECT * FROM appointment");
        return DoctorModel::join('doctor','appointment.id_doctor','doctor.id_doctor')
                            ->join('users','appointment.id_user','users.id')
                            ->select('appointment.*','doctor.name_doctor','users.name')
                            ->get();
        // SELECT * FROM `appointment` INNER JOIN doctor ON appointment.id_doctor=doctor.id_doctor INNER JOIN users ON appointment.id_user=users.id_users
    }

    static function Approved($id){
        return DB::table('appointment')
        ->where('id', $id)
        ->update(['status' => 'approved']);
}
}
