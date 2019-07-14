<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EncryptionController extends Controller
{
    public function index()
    {
        return view('latihan-encryption');
    }

    public function index2()
    {
        return view('latihan-encryption-2');
    }

    public function generateCode(Request $request)
    {
        $email = $request->email;
        $check = $request->checking;

        if($email != "" && $check != ""){
            $cek = Hash::check($email,$check);
            if ($cek == false) {
                $data = "Tidak Valid";
            }else{
                $data = 'Valid';
            }
        }elseif ($email != "" ){ 
            $data = Hash::make($email);            
        }else {
            $data = "Tidak Valid";
        }
        return view('latihan-encryption',['data' => $data]);

    }

    public function generateEncryptedCode(Request $request)
    {
        $email = $request->email;
        $checking = $request->checking;
        
        if ($email != "") {
            $data = encrypt($email);
        }else{
            $data = decrypt($checking);
        }
        
        return view('latihan-encryption-2',['data' => $data]);
    }

}
