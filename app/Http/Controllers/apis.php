<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class apis extends Controller
{
    //
    public function sendrequest(Request $request){
        // $body = $request->getContent();
        // print($body);
        try{
            $result = app('db')->select("SELECT * FROM requests");
            return $result;
        }
        catch(\Illuminate\Database\QueryException  $e){
            dd($e->getMessage());
        }
    }

    public function getlimelightcategories(){
        try{
            $result = app('db')->select("SELECT * FROM product_categories WHERE limelight=1");
            // return response()->json($result);
            return json_encode($result);
        }
        catch(\Illuminate\Database\QueryException  $e){
            dd($e->getMessage());
        }
    }

    public function getAllProducts(){
        return response()->json();
    }
}
