<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswa extends Controller
{
    public function redirectCreatePage() {
        return view('create_pupu');
    }


    public function createdata(Reqeust $request) {
        
            Data::create([
                'mahasiswa_name' => $request->mahasiswa_name,
                'author' => $request->author
            ]);

        return redirect('/');
    }
}
