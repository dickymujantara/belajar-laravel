<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class PembeliController extends Controller
{
    public function index()
    {
        $cek = Auth::user()->hasRole('ROLE_PEMBELI');
        // var_dump($cek);
        $id = Auth::user()->generateCode();

        if ($cek == true) {;
            return view('pembeli.home',['id' => $id]);
        }
            return redirect('/home');

    }

    public function formData()
    {
        $cek = Auth::user()->hasRole('ROLE_PEMBELI');
        $user = Auth::user()->id;

        // $data = DB::table('formdata')->where('user_id', $user)->select()->get();
        // $check = sizeOf($data);

        $sisa = DB::table('data_limit')->where('user_id',$user)->select('limit')->first();
        // var_dump($sisa->limit);

        if ($cek == true) {
            return view('pembeli.form-data',['sisa' => $sisa->limit]);
        }
            return redirect('/home');
    }

    public function insertData(Request $request)
    {
        $user = Auth::user()->id;

        $sisa = DB::table('data_limit')->where('user_id',$user)->select('limit')->first();
        $cek = $sisa->limit;

        if ($cek == 0) {
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

        $cek--;

        DB::table('formdata')->insertGetId($collect);
        DB::table('data_limit')->where('user_id',$user)->update(['limit' => $cek]);
        return redirect()->back();

    }

    public function _construct(){
    	$this->middleware('auth');

    	//untuk super admin
    	$this->middleware('role:ROLE_PEMBELI');
    }
}
