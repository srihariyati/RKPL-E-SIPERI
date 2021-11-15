<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{   
    public function dataStore(Request $request)
    {
        DB::table('data_dokter')->insert([
           'no_dokter'=>$request->noPegawaiDok,
           'nama_dokter'=>$request->namaDokter,
           'bidang_spesialis'=>$request->bidSpesialis
        ]);
        return view('MenuAdmin');
    }
}
