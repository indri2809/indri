<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cekController extends Controller
{
    //
    public function index()
    {
        return view('datarumah.index', [
            "title" => "Datarumah",
            "data" => cek_data::all()
        ]);
    }
}
