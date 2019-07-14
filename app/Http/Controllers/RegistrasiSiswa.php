<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegistrasiSiswa extends Controller
{
    public function insert(Request $request) {
      
	  $id = $request->id;
	  $nip = $request->nip;
	  $nama = $request->nama;
	  $email = $request->email;
	  $alamat = $request->alamat;
	  $ttl = $request->ttl;
	  
      DB::insert('insert into data_siswa values(null, ?,?,?,?,?)',[$nip, $nama, $email, $alamat, $ttl]);
       $siswa = ['status' => 'Insert'];
      return view('siswa-success', $siswa);
   }
    public function show($id){
   	$siswa = DB::select('select * from data_siswa where id = ?',[$id]);
   	return view('siswa-registrasi-edit',['siswa'=>$siswa]);
   }
   public function edit(Request $request, $id){
   	$nip = $request->nip;
   	$nama = $request->nama;
   	$email = $request->email;
   	$alamat = $request->alamat;
   	$ttl = $request->ttl;
   	DB::update('UPDATE data_siswa set nama = ?, email = ?, alamat = ?, ttl = ? WHERE nip = ?',[$nama, $email, $alamat, $ttl, $nip]);
   	 $siswa = ['status' => 'Update'];
      return view('siswa-success', $siswa);
   }
   public function showAll(){
   	$siswa = DB::select('SELECT * FROM data_siswa');
   	return view('siswa-registrasi-all',['siswa'=>$siswa]);
   }
   public function deleteAll(){
      $siswa = DB::select('select * FROM data_siswa');
      return view('user-registrasi-delete-all',['siswa'=>$siswa]);
   }
   public function delete($id){
      DB::delete('DELETE FROM data_siswa WHERE id=?',[$id]);
      $siswa = ['status' => 'delete'];
      return view('siswa-success', $siswa);
   }
   public function insertSiswa(Request $request){
      // $file = $request->input('file');
      $file = $request->file('file');
      $filename = $file->getClientOriginalName();

      $extension = $file->getClientOriginalExtension();
      $path = $file->getRealPath();

      echo "file 1 =".$file."<br>";
      // echo "file 2 =".$file2."<br>";

      $destinationPath = 'uploads';
      $file->move($destinationPath,$filename);
      echo "berhasil dipindahkan!";
   }
    public function indexSiswa(){
      return view('registersiswaprofile');
   }
   public function insertSiswaDB(Request $request) {
      
     $id = $request->id;
     $nip = $request->nip;
     $nama = $request->nama;
     $email = $request->email;
     $alamat = $request->alamat;
     $ttl = $request->ttl;
     $profile = $request->profile;
     $file = $request->file;
     
      DB::insert('insert into data_siswa values(null, ?,?,?,?,?,?,?)',[$nip, $nama, $email, $alamat, $ttl,$profile,$file]);

      // $file = $request->input('file');


      // $file = $request->file('file');
      $filename = $file->getClientOriginalName();

      $extension = $file->getClientOriginalExtension();
      $path = $file->getRealPath();

      //echo "file 1 =".$file."<br>";
      // echo "file 2 =".$file2."<br>";

      $destinationPath = 'uploads';
      $file->move($destinationPath,$filename);
      echo "berhasil dipindahkan!";
   }

}