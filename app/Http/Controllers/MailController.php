<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use DB;

class MailController extends Controller
{
    public function index()
    {
        return view('mail.form');
    }

    public function basic_email(Request $request)
    {
        $username = $request->username;
        $email = $request->email;
        $generate = Hash::make($email);

        DB::table('users')->where('email',$email)->update(['codegenerate' => $generate]);

        $data = array('username' => $username,'email' => $email,'generate' => $generate);

        Mail::send('mail.mail',$data, function($message) use($email,$username){
            $message->to($email,$username);
            $message->subject('Try & Error');
            $message->from('reynaldimujantara04@gmail.com','Reynaldi');
        });

        return redirect()->back();
    }

    public function template(Request $request)
    {
        $username = $request->username;
        $email = $request->email;

        $data = [
            'username' => $username,
            'email' => $email
        ];

        return view('mail.mail',$data);
    }

    public function decision($generate)
    {
        $data = DB::table('users')->where('codegenerate',$generate)->select('email')->first();
        $email = $data->email;
        return view('mail.unsubscribe',['email' => $email]);
    }

    public function confirm($generate)
    {
        $data = DB::table('users')->where('codegenerate',$generate)->get();

        $size = sizeof($data);
        if ($size > 0) {
            $msg = "Berhasl Di Confirm";
        }else{
            $msg = "Gagal Confirm";
        }

        echo $msg;

    }

    public function delete(Request $request)
    {
        $email = $request->email;

        $delete = DB::table('users')->where('email',$email)->delete();

        if ($delete == true) {
            $msg = "Unsubscribe Successfully";
        }else {
            $msg = "Email Not found";
        }

        echo $msg;

    }

    public function viewAttach()
    {
        return view('latihan-attachment');
    }

    public function sendAttach(Request $request)
    {
        $email = $request->email;

        $getMail = explode(',',$email);

        $file = $request->all();

        echo var_dump($file);
        // $fileName = $file->getClientOriginalName();
        // $extension = $file->getClientOriginalExtension();
        // $path  = $file->getRealPath();
        // $destinationPath = 'uploads';
        // $lokasi = $file->move($destinationPath,$fileName);

        // for ($i=0; $i < sizeof($getMail); $i++) {
        //     $data = array('lokasi'=>$lokasi);
        //     $tujuan = $getMail[$i];

        //     Mail::send('mail.attachment',$data, function($message) use($tujuan,$lokasi){
        //         $message->to($tujuan);
        //         $message->attach($lokasi);
        //         $message->subject('Try & Error');
        //         // $message->from();
        //     });
        // }
        

        // return redirect()->back();
    }

    public function sendMsg(Request $req)
    {
        $email = $req->email;
        $fName = $req->firstName;
        $lName = $req->lastName;
        $msg = $req->msg;

        $username = $fName." ".$lName;

        $data = array('username' => $username,'email' => $email,'msg' => $msg);

        Mail::send('mail.mail',$data, function($message) use($email,$username){
            $message->to('dickymujantara@gmail.com');
            $message->subject('Try & Error');
            $message->from($email,$username);
        });

        echo 'Data Terkirim';
    }

}