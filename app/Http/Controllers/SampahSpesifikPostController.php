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

    public function create(){
        $datas = Kota::get(["name", "id"]);
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
}
