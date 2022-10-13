<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{

    public function organik()
    {
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('admin.form-organik',[
        'datas' => $datas
        ]);
    }
    public function fetchKecamatan(Request $request)
    {
        $data['kecamatan'] = Kecamatan::where("kota_id",$request->kota_id)->get(["name_kec", "kec_id"]);
        return response()->json($data);
    }
    public function fetchKelurahan(Request $request)
    {
        $data['kelurahan'] = Kelurahan::where("kec_id",$request->kec_id)->get(["name_kel", "kel_id"]);
        return response()->json($data);
    }

    public function anorganik()
    {
        $data['kota'] = Kota::get(["name_kota", "kota_id"]);
        return view('admin.form-anorganik', $data);
    }

    public function lapak()
    {
        $data['kota'] = Kota::get(["name_kota", "kota_id"]);
        return view('admin.form-lapak', $data);
    }

    public function pembatasan()
    {
        $data['kota'] = Kota::get(["name_kota", "kota_id"]);
        return view('admin.form-pembatasan', $data);
    }

    public function tps()
    {
        $data['kota'] = Kota::get(["name_kota", "kota_id"]);
        return view('admin.form-tps', $data);
    }
}
