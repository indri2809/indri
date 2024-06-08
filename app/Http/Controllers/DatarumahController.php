<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_rumah;
use Illuminate\Contracts\View\View;

class DatarumahController extends Controller
{
    //
    public function index(){
        return view('datarumah.index',["title" => "koleksi buku","data"=>data_rumah::paginate(8)]);
        
    }

    
    public function create(){
        return view('datarumah.create')->with(["title"=>"tambah data buku"]);   
    }

    public function store(Request $request){
        
        $validasi=$request->validate([
            "alamat"=>"required",
            "kota"=>"required",
            "img"=>"image|file|max:8046",
            "amount"=>"required",
            "status"=>"required"
            
        ]);
        if ($request->file('img')){
            $validasi['img']=$request->file('img')->store('img');
        }

        data_rumah::create($validasi);
        return redirect()->route('datarumah.index');
    }

    

    public function destroy($id){
        data_rumah::where('id',$id)->Delete();
        return redirect()->route(('datarumah.index'))->with('success', 'Buku berhasil dihapus');;
    }
}
