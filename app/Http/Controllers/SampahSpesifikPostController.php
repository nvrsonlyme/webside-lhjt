<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\SampahSpesifik;
use Illuminate\Http\Request;

class SampahSpesifikPostController extends Controller
{
    public function index(){
        $spesifik = SampahSpesifik::all();
        return view('admin.sampah-spesifik', compact(['spesifik']));
    }
    public function cetakSampahSpesifik(){
        $dataspesifik = SampahSpesifik::all();
        return view('cetak.cetak-data-sampah-spesifik', compact(['dataspesifik']));
    }

    public function create(){
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('admin.form-sampah-spesifik',[
            'datas' => $datas
        ]);
    }

    public function store(Request $request){
        // return $request->all();
        // dd($request->except(['_token', 'submit']));
        SampahSpesifik::create($request->except(['_token', 'submit']));
        return redirect('/sampah-spesifik');
    }

    public function ubah($id){
        $spesifik = SampahSpesifik::find($id);
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('ubah.form-sampah-spesifik-edit',[
            'datas' => $datas
        ], compact(['spesifik']));
    }

    public function lihat($id){
        $spesifik = SampahSpesifik::find($id);
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('lihat.lihat-data-sampahspesifik',[
            'datas' => $datas
        ], compact(['spesifik']));
    }

    public function update($id, Request $request){
        $spesifik = SampahSpesifik::find($id);
        // return $request->all();
        $spesifik->update($request->except(['_token', 'submit']));
        return redirect('/sampah-spesifik');
    }

    public function destroy($id){
        $spesifik = SampahSpesifik::find($id);
        $spesifik->delete();
        return redirect('/sampah-spesifik');
    }
}
