<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Lapak;
use Illuminate\Http\Request;

class LapakPostController extends Controller
{
    public function index(){
        $lapak = Lapak::all();
        return view('admin.lapak', compact(['lapak']));
    }

    public function create(){
        $datas = Kota::get(["name", "id"]);
        return view('admin.form-lapak',[
            'datas' => $datas
        ]);
    }

    public function store(Request $request){
        // return $request->all();
        // dd($request->except(['_token', 'submit']));
        Lapak::create($request->except(['_token', 'submit']));
        return redirect('/lapak');
    }

    public function ubah($id){
        $lapak = Lapak::find($id);
        $datas = Kota::get(["name", "id"]);
        return view('ubah.form-lapak-edit',[
            'datas' => $datas
        ], compact(['lapak']));
    }

    public function update($id, Request $request){
        $lapak = Lapak::find($id);
        // return $request->all();
        $lapak->update($request->except(['_token', 'submit']));
        return redirect('/lapak');
    }

    public function destroy($id){
        $lapak = Lapak::find($id);
        $lapak->delete();
        return redirect('/lapak');
    }
}
