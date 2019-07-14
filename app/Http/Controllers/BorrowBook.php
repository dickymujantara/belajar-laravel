<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowBook extends Controller
{
    public function showForm()
    {
        return view('peminjaman-buku');
    }

    public function submitData(Request $request)
    {
        $bookName = $request->all();
        //var_dump($bookName);
        foreach ($bookName as $key => $value) {
          if ($key == 'buku') {
              echo "ada data ". sizeof($value);
          }  
        };
    }

}
