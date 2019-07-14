<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MemberController extends Controller
{
    public function index()
    {
        $datas = DB::table('users')->select('id','name','email','member')->get();
        return view('member.member',['datas' => $datas]);
    }

    public function edit($id)
    {
        $data = DB::table('users')->where('id',$id)->select()->first();
        return view('member.member-edit',['data' => $data]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $member = $request->member;
        $serialNum = $request->serialNum;
        $generate = $request->generate;
        $decrypt = decrypt($generate);

        if ($serialNum == $decrypt) {
            
            if ($member == 'bronze') {
                $change = 'silver';
            }elseif ($member == 'silver') {
                $change = 'gold';
            }else{
                $change = 'gold';
            }
            DB::table('users')->where('id',$id)->update(['member' => $change]);
            echo 'Berhasil';

        } else {
            echo "Tidak Valid";
        }
    }

}
