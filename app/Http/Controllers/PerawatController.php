<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerawatController extends Controller
{
    public function dataStore(Request $request)
    {
        DB::table('login_perawat')->insert([
           'no_pegawai'=>$request->noPegawai,
           'nama_perawat'=>$request->namaPerawat,
           'password'=>$request->passwordPerawat
        ]);
        return view('MenuAdmin');
    }
}
