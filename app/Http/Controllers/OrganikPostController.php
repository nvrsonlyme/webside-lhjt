<?php

namespace App\Http\Controllers;
use App\Models\Kota;
use App\Models\Organik;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class OrganikPostController extends Controller
{
    public function index(){
        $organik = Organik::all();
        // $role = Organik::roleuser();
        return view('admin.organik', compact(['organik']));
    }

    public function cetakOrganik(){
        $dataorganik = Organik::all();
        return view('cetak.cetak-data-organik', compact(['dataorganik']));
    }

    public function cetak1data($id){
        $cetakdataorganik = Organik::find($id);
        return view('cetak.cetak-1data-organik', compact(['cetakdataorganik']));
    }

    public function create(){
        $datas = Kota::get(["name_kota", "kota_id"]);
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
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('ubah.form-organik-edit',[
            'datas' => $datas
        ], compact(['organik']));
    }

    public function lihat($id){
        $organik = Organik::find($id);
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('lihat.lihat-data-organik',[
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

    public function search(Request $request){
        if($request->has('search')){
            $organik = Organik::where('kelurahan','LIKE', '%'.$request->search.'%')->get();
        }
        else{
            $organik = Organik::all();
        }
        return view('admin.organik', ['organik'=> $organik]);
    }


}
