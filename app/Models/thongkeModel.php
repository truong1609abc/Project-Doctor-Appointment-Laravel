<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class thongkeModel extends Model
{
    use HasFactory;

   static function thongke(){
    return DB::select("SELECT COUNT(*)as dem FROM appointment");
   }
}
