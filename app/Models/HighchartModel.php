<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HighchartModel extends Model
{
    use HasFactory;

    public $table = "appointment";
    static function index(){
        return DB::select("SELECT * FROM appointment");
    }
}
