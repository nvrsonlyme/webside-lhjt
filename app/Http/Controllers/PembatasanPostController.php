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

    public function create(){
        $datas = Kota::get(["name", "id"]);
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
}
