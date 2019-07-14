<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Form;

class FormController extends Controller
{
    public function index()
    {
        return view('latihan.form');
    }

    public function cobaForm()
    {
        $konten = Form::open(array('url'=>'foo/bar'));
        $konten .= Form::text('username','Username');
        $konten .= Form::close();
        echo $konten;
    }

}
