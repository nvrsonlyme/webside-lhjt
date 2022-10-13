<?php

namespace App\Http\Controllers;

use App\Models\Anorganik;
use App\Models\Kota;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnorganikPostController extends Controller
{
    public function index(){
        $anorganik = Anorganik::all();
        return view('admin.anorganik', compact(['anorganik']));
    }

    // public function getdata($id){
    //     $anorganik = Anorganik::find($id);
    //     $anorganik->nomor_id = Auth::user()->nomor_id;
    //     return redirect('/anorganik');
    // }

    public function cetakAnorganik(){
        $dataanorganik = Anorganik::all();
        return view('cetak.cetak-data-anorganik', compact(['dataanorganik']));
    }

    public function create(){
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('admin.form-anorganik',[
            'datas' => $datas
        ]);
    }

    public function store(Request $request){
        // return $request->all();
        // dd($request->except(['_token', 'submit']));
        Anorganik::create($request->except(['_token', 'submit']));
        return redirect('/anorganik');
    }

    public function ubah($id){
        $anorganik = Anorganik::find($id);
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('ubah.form-anorganik-edit',[
            'datas' => $datas
        ], compact(['anorganik']));
    }

    public function lihat($id){
        $anorganik = Anorganik::find($id);
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('lihat.lihat-data-anorganik',[
            'datas' => $datas
        ], compact(['anorganik']));
    }

    public function update($id, Request $request){
        $anorganik = Anorganik::find($id);
        // return $request->all();
        $anorganik->update($request->except(['_token', 'submit']));
        return redirect('/anorganik');
    }

    public function destroy($id){
        $anorganik = Anorganik::find($id);
        $anorganik->delete();
        return redirect('/anorganik');
    }
}
