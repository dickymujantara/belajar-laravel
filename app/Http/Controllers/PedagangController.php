<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class PedagangController extends Controller
{
    public function index()
    {
        $cek = Auth::user()->hasRole('ROLE_PEDAGANG');
        // var_dump($cek);
        $id = Auth::user()->generateCode();

        if ($cek == true) {
            return view('pedagang.home',['id' => $id]);
        }
            return redirect('/home');

    }

    public function formData()
    {
        $cek = Auth::user()->hasRole('ROLE_PEDAGANG');
        $user = Auth::user()->id;

        $data = DB::table('formdata')->where('user_id', $user)->select()->get();
        $check = sizeOf($data);

        $sisa = 5 - $check;

        if ($cek == true) {
            return view('pedagang.form-data',['sisa' => $sisa]);
        }
            return redirect('/home');
    }

    public function insertData(Request $request)
    {
        $user = Auth::user()->id;

        $data = DB::table('formdata')->where('user_id', $user)->select()->get();
        $check = sizeOf($data);
        
        if ($check >= 5) {
            echo "Input Form Sudah Sampai Limit!";
            die();
        }

        $case = $request->case;
        $photo = $request->photo;

        $fileName = $photo->getClientOriginalName();
        $extension = $photo->getClientOriginalExtension();
        $path  = $photo->getRealPath();
        $destinationPath = 'uploads';
        $lokasi = $photo->move($destinationPath,$fileName);

        $collect = [
            'user_id' => $user,
            'case' => $case,
            'path' => $lokasi
        ];

        DB::table('formdata')->insertGetId($collect);
        return redirect()->back();

    }

    public function _construct(){
    	$this->middleware('auth');

    	//untuk super admin
    	$this->middleware('role:ROLE_PEDAGANG');
    }
}
