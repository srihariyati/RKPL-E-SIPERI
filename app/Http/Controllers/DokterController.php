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

    public function showSpes(Request $request)
    {
        //mengambil data dari tabel spesialis
        $dataspesialis = DB::table('data_spesialis')->get();
        return view('LihatData',['dataspesialis'=>$dataspesialis]);
    }

    public function showDok($spesialis)
    {
        $dokterlist = DB::table('data_dokter')
        ->where('bidang_spesialis',$spesialis)->get();
        $spes = $spesialis;
        return view ('ListDokter',['dokterlist'=>$dokterlist])
        ->with(['spes'=>$spes]);
    }
    
}
