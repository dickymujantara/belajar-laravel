<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegistrasiUser extends Controller
{
    public function insert(Request $request)
    {
        $email = $request->email;
        $username = $request->username;
        $password = $request->password;
        $data = ['status' => 'Insert'];

        DB::insert("INSERT INTO data_user (username,email,password) VALUES ('$username','$email','$password')");
        return view('user-success' , $data);
        
    }

    public function show($id)
    {
        $users = DB::select("SELECT * FROM data_user WHERE id = $id ");
        return view('user-edit', ['users'=>$users]);
    }

    public function edit(Request $request,$id)
    {
        $username = $request->username;
        $email = $request->email;
        $passwd = $request->password;
        $data = ['status' => 'Edit'];

        DB::update("UPDATE data_user SET email = ?, password = ? WHERE username = ? ", [$email,$passwd,$username]);
        return view('user-success',$data);
    }

    

    public function showAll()
    {
        $users = DB::select("SELECT * FROM data_user");
        return view('user-view-all',['users'=>$users]);
    }

    public function deleteAll()
    {
        $users = DB::select("SELECT * FROM data_user");
        return view('user-registrasi-delete-all', ['users'=> $users]);
    }

    public function delete($id)
    {
        DB::delete("DELETE FROM data_user WHERE id = ?",[$id]);
        $data = ['status' => 'Delete'];
        return view('user-success',$data);
    }

    public function indexProfile()
    {
        return view('user-profile');
    }

    public function insertProfile(Request $request)
    {
        $file = $request->file('pic');
        $fileName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $path  = $file->getRealPath();

        echo "file 1 = ".$file."<br>";
        echo "Lokasi : $path<br>";

        $destinationPath = 'uploads';
        $lokasi = $file->move($destinationPath,$fileName);
        echo "berhasil dipindahkan <br>";
        echo "lokasi di pindahkan : $lokasi<br>";
    }

    public function getDataObject(Request $request)
    {
        $province = $request->province;

        $data = DB::table('data_province')->select('city')->where('province',$province)->get();
        echo json_encode($data);
    }

    public function getDataUser(Request $request)
    {
        $username = $request->username;

        $data = DB::table('data_user')->select('username')->where('username',$username)->get();
        echo json_encode($data);
    }

}
