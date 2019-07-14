<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index()
   {
       return view('profile');
   }

   public function generate(Request $request)
   {
       $serialNum = $request->serialNum;

       $generate = encrypt($serialNum);

       echo $generate;
   }

   public function validation(Request $request)
   {
        $serialNum = $request->serialNum;
        $generate = $request->generate;

        $decrypt = decrypt($generate);

        if ($serialNum == $decrypt) {
            $msg = "Valid";
        } else {
            $msg = "Tidak Valid";
        }
        
        echo $msg;
   }

}
