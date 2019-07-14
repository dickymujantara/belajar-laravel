<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Jurusan extends Controller
{
    public function insert(Request $request)
    {
        $nama = $request->all();
        // var_dump($nama);
        $photo = $request->photo;
        $data = ['status' => 'Update'];
        $fileName = $photo->getClientOriginalName();
        $extension = $photo->getClientOriginalExtension();
        $path  = $photo->getRealPath();
        $data = ['status' => 'Update'];

        $destinationPath = 'uploads';
        $lokasi = $file->move($destinationPath,$fileName);

        DB::insert("INSERT INTO jurusan (nama,path) VALUES ('$nama','$lokasi')");
        return view('jurusan-success',$data);
        
    }

    public function uploadPhoto()
    {
        return view('jurusan-photo');
    }

    public function insertPhoto(Request $request)
    {
        $nama = $request->nama;
        $photo = $request->file;
        $fileName = $photo->getClientOriginalName();
        $extension = $photo->getClientOriginalExtension();
        $path  = $photo->getRealPath();
        $destinationPath = 'uploads';
        $lokasi = $file->move($destinationPath,$fileName);

        DB::insert("INSERT INTO jurusan (nama,path) VALUES ('$nama','$lokasi')");
        echo "sukses";
    }

    public function showAll()
    {
       $jurusan = DB::select("SELECT * FROM jurusan");
        return view("jurusan-all",['jurusan'=>$jurusan]);
    }

    public function show($id)
    {
        $jurusan = DB::select("SELECT * FROM jurusan WHERE id = $id");
        return view("jurusan-view",['jurusan'=>$jurusan]);
    }

    public function edit(Request $request,$id)
    {
        $jurusan = $request->jurusan;
        DB::update("UPDATE jurusan SET nama = ?, path WHERE id = ? ", [$jurusan,$path,$id]);
        return view('jurusan-success',$data);
    }

    public function delete($id)
    {
        DB::delete("DELETE FROM jurusan WHERE id = ?",[$id]);
        $data = ['status' => 'Delete'];
        return view('jurusan-success',$data);
    }

}
