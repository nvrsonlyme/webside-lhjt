<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){
        $users = User::all();
        return view('admin.organik', compact(['users']));
    }

    // public function anorganik()
    // {
    //     $getdatas = User::get(["user_id"]);
    //     return view('admin.form-organik',[
    //     'getdatas' => $getdatas
    //     ]);
    // }
}
