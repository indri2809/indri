<?php

namespace App\Http\Controllers;

use App\Models\cek_data;
use Illuminate\Http\Request;

class sewaController extends Controller
{
    //
    public function create($id){
        return view('datarumah.create2')->with(["title"=>"sewa rumah", "id_rumah"=>$id]);
    }
    
    public function store(Request $request,$id)
    {
        $validasi = $request->validate([
            'id_rumah' => 'required',
            'nama' => 'required',
            'noHp' => 'required',
            'tgl_sewa' => 'required|date',
            'tgl_keluar' => 'required|date',
        ]);

        cek_data::create($validasi);

        return redirect()->route('cekdata.index');
    }
}
