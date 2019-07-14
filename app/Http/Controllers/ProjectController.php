<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{
    public function showForm()
    {
        return view('projectform');
    }

    public function multiForm()
    {
        return view('jurusan-photo-multiple');
    }

    public function getData(Request $request)
    {
        $username = $request->username;

       $data = DB::table('project')->select('name')->where('username',$username)->first();
       echo $data->name;
    }

    public function getDataObject(Request $request)
    {
        $username = $request->username;

        $data = DB::table('project')->select('name')->where('username',$username)->get();
        echo json_encode($data);
    }

    public function insertMulti(Request $request)
    {
        $photo = $request->file;
        $fileName = $photo->getClientOriginalName();
        $extension = $photo->getClientOriginalExtension();
        $path  = $photo->getRealPath();
        $destinationPath = 'uploads';
        $lokasi = $photo->move($destinationPath,$fileName);
        echo $fileName;
    }

}
