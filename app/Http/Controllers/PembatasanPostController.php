<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Pembatasan;
use Illuminate\Http\Request;

class PembatasanPostController extends Controller
{
    public function index(){
        $pembatasan = Pembatasan::all();
        return view('admin.pembatasan', compact(['pembatasan']));
    }

    public function cetakPembatasan(){
        $datapembatasan = Pembatasan::all();
        return view('cetak.cetak-data-pembatasan', compact(['datapembatasan']));
    }

    public function create(){
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('admin.form-pembatasan',[
            'datas' => $datas
        ]);
    }

    public function store(Request $request){
        // return $request->all();
        // dd($request->except(['_token', 'submit']));
        Pembatasan::create($request->except(['_token', 'submit']));
        return redirect('/pembatasan');
    }

    public function ubah($id){
        $pembatasan = Pembatasan::find($id);
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('ubah.form-pembatasan-edit',[
            'datas' => $datas
        ], compact(['pembatasan']));
    }

    public function lihat($id){
        $pembatasan = Pembatasan::find($id);
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('lihat.lihat-data-pembatasan',[
            'datas' => $datas
        ], compact(['pembatasan']));
    }

    public function update($id, Request $request){
        $pembatasan = Pembatasan::find($id);
        // return $request->all();
        $pembatasan->update($request->except(['_token', 'submit']));
        return redirect('/pembatasan');
    }

    public function destroy($id){
        $pembatasan = Pembatasan::find($id);
        $pembatasan->delete();
        return redirect('/pembatasan');
    }
}
