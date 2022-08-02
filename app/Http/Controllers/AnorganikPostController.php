<?php

namespace App\Http\Controllers;

use App\Models\Anorganik;
use App\Models\Kota;
use Illuminate\Http\Request;

class AnorganikPostController extends Controller
{
    public function index(){
        $anorganik = Anorganik::all();
        return view('admin.anorganik', compact(['anorganik']));
    }

    public function create(){
        $datas = Kota::get(["name", "id"]);
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
        $datas = Kota::get(["name", "id"]);
        return view('ubah.form-anorganik-edit',[
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
