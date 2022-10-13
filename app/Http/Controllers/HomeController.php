<?php

namespace App\Http\Controllers;

use App\Models\Anorganik;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Lapak;
use App\Models\Organik;
use App\Models\Pembatasan;
use App\Models\SampahSpesifik;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jml_organik = Organik::all()->count();
        $jml_anorganik = Anorganik::all()->count();
        $jml_lapak = Lapak::all()->count();
        $jml_pembatasan = Pembatasan::all()->count();
        $jml_sampahspesifik = SampahSpesifik::all()->count();
        $akun = User::all();
        // $role_user = User::where('id', 'username', 'password')->get('username');
        return view('admin.home', compact('jml_organik', 'jml_anorganik',
        'jml_lapak', 'jml_pembatasan', 'jml_sampahspesifik', 'akun'));
    }

    public function create_akun($post){
        $datas = Kota::get(["name_kota", "kota_id"]);
        $password = password_hash('password', PASSWORD_DEFAULT);
        return view('admin.home', compact(['datas', 'password']));
    }

    public function ubah_akun($id){
        $akun = User::find($id);
        $datas = Kota::get(["name_kota", "kota_id"]);
        return view('admin.home', compact(['akun', 'datas']));
    }

    public function store(Request $request){
        // return $request->all();
        // dd($request->except(['_token', 'submit']));
        User::create($request->except(['_token', 'submit']));
        return redirect('/home');
    }

    public function destroy($id){
        $akun = User::find($id);
        $akun->delete();
        return redirect('/home');
    }

    public function update($id, Request $request){
        $akun = User::find($id);
        // return $request->all();
        $akun->update($request->except(['_token', 'submit']));
        return redirect('/home');
    }
}
