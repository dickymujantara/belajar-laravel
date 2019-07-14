<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingApi extends Controller
{
    public function index()
    {
        return view('testing-api');
    }

    public function createUrl(Request $request)
    {
        $text = $request->text;

        $url = "http://tinyurl.com/api-create.php?url=$text";

        $hasil = file_get_contents($url);

        return view('testing-api-hasil', ['data' => $hasil]);
    }
    
}