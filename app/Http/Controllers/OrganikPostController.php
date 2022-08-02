<?php

namespace App\Http\Controllers;
use App\Models\Kota;
use App\Models\Organik;
use Illuminate\Http\Request;



class OrganikPostController extends Controller
{
    public function index(){
        $organik = Organik::all();
        return view('admin.organik', compact(['organik']));
    }

    public function create(){
        $datas = Kota::get(["name", "id"]);
        return view('admin.form-organik',[
            'datas' => $datas
        ]);
    }

    public function store(Request $request){
        // return $request->all();
        // dd($request->except(['_token', 'submit']));
        Organik::create($request->except(['_token', 'submit']));
        return redirect('/organik');
    }

    public function ubah($id){
        $organik = Organik::find($id);
        $datas = Kota::get(["name", "id"]);
        return view('ubah.form-organik-edit',[
            'datas' => $datas
        ], compact(['organik']));
    }

    public function update($id, Request $request){
        $organik = Organik::find($id);
        // return $request->all();
        $organik->update($request->except(['_token', 'submit']));
        return redirect('/organik');
    }

    public function destroy($id){
        $organik = Organik::find($id);
        $organik->delete();
        return redirect('/organik');
    }

}
