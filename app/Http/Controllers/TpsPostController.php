<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\TPS;
use Illuminate\Http\Request;

class TpsPostController extends Controller
{
    public function index(){
        $tps = TPS::all();
        return view('admin.data-tps', compact(['tps']));
    }

    public function create(){
        $datas = Kota::get(["name", "id"]);
        return view('admin.form-tps',[
            'datas' => $datas
        ]);
    }

    public function store(Request $request){
        // return $request->all();
        // dd($request->except(['_token', 'submit']));
        TPS::create($request->except(['_token', 'submit']));
        return redirect('/data-tps');
    }
}
