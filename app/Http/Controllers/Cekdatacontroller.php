<?php

namespace App\Http\Controllers;

use App\Models\cek_data;
use Illuminate\Http\Request;

class Cekdatacontroller extends Controller
{
    //



    //
    public function index(){
        return view('cekdata.index',["title" => "cekdata","data"=>cek_data::paginate(8)]);
        
    }

    public function create(){
        return view('datarumah.create2')->with(["title"=>"tambah data buku"]);   
    }
    public function store(Request $request){
        $validasi=$request->validate([
            "nama"=>"required",
            "noHp"=>"required",
            "tgl_sewa"=>"required",
            "tgl_keluar"=>"required",
        ]);
        

        cek_data::create($validasi);
        return redirect()->route('cek_data.index');
    }

    public function destroy($id){
        cek_data::where('id',$id)->Delete();
        return redirect()->route(('cekdata.index'))->with('success', 'cek data berhasil dihapus');;
    }
}


