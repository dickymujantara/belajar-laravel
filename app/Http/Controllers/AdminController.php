<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        $cek = Auth::user()->hasRole('ROLE_ADMIN');
        $id = Auth::user()->generateCode();
        // $cek = Auth::user()->name;

        if ($cek == true) {
            return view('admin.home',['id' => $id]);
        }
            return redirect('/home');
    }

    public function formData()
    {
        $cek = Auth::user()->hasRole('ROLE_ADMIN');

        $user = Auth::user()->id;

        $data = DB::table('formdata')->where('user_id', $user)->select()->get();
        $limit = DB::table('data_limit')->where('user_id', $user)->select()->get();
        $check = sizeOf($data);
        $getLimit = sizeof($limit);

        $sisa = $getLimit - $check;

        if ($cek == true) {
            return view('admin.form-data',['sisa' => $sisa]);
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

    public function dataLimit()
    {
        $cek = Auth::user()->hasRole('ROLE_ADMIN');
        $id = Auth::user()->generateCode();
        // $cek = Auth::user()->name;

        $dataLimit = DB::table('data_limit')->select()->get();

        $collect = [
            'id' => $id,
            'datas' => $dataLimit
        ];

        if ($cek == true) {
            return view('admin.data-limit',$collect);
        }
            return redirect('/home');
    }


    public function dataLimitAdd(Request $request)
    {
        // $user = Auth::user()->id;
        $limitBaru = $request->limit;
        $id = $request->userId;

        $data = DB::table('data_limit')->where('user_id',$id)->select()->first();
        $limitLama = $data->limit;

        $tambah = $limitLama + $limitBaru;
        DB::table('data_limit')->where('user_id',$id)->update(['limit' => $tambah]);

    }

    public function _construct(){
    	$this->middleware('auth');

    	//untuk admin
    	$this->middleware('role:ROLE_ADMIN');
    }

}