<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class RetiveController extends Controller
{
function retivingData(){
    $result=DB::table('Student')->get();
    return $result;
}
}
