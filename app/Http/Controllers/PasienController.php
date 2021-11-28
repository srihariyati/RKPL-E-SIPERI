<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    // panggil halaman input data pribadi pasien
    public function input(){
        return view('InputDataPasien');
    }

    public function pribadiStore(Request $request)
    {
        DB::table('data_pasien')->insert([
            'no_pasien' => $request->noPasien,
		    'nama_pasien' => $request->namaPasien,
		    'tgl_lhr_pasien' => $request->tgl_lhrPasien,
		    'almt_pasien' => $request->alamatPasien,
            'nohp_pasien'=>$request->nohpPasien,
            'jk_pasien'=>$request->jkPasien
        ]);

        $nomorPasien = $request->noPasien;
        return view('InputMedikPasien')
        ->with(['nomorPasien'=>$nomorPasien]);
    }

    public function medikStore(Request $request)
    {
        DB::table('medik_pasien')->insert([
            'no_pasien'=>$request->noPasien,
            'gol_darah'=>$request->goldarPasien,
            'tek_darah'=>$request->tekPasien,
            'jantung'=>$request->jantungPasien,
            'diabetes'=>$request->diabetesPasien,
            'hepatitis'=>$request->hepatitisPasien,
            'alergi_obat'=>$request->alerobatPasien,
            'alergi_mkn'=>$request->alermakanPasien
        ]);

        $nomorPasien = $request->noPasien;

        $namaDokter = DB::table('data_dokter')->get();
        return view('InputTindakan')
        ->with(['nomorPasien'=>$nomorPasien])
        ->with(['namaDokter'=>$namaDokter]);
    }   
    
    public function tindakanStore(Request $request)
    {
        DB::table('tindakan_pasien')->insert([
            'no_pasien'=>$request->noPasien,
            'tgl_tindakan'=>$request->tglTindakan,
            'nama_spesialis'=>$request->spesialisTindakan,
            'nama_dokter'=>$request->dokterTindakan,
            'tindakan'=>$request->jenisTindakan
        ]);
        return view('MenuPerawat');
    }
    
    public function showPasien($nama_dokter)
    {
        //Mencari ID pasien yang memiliki
        //nama dokter terpilih pada tabel tindakan_pasien
        $dataPasien = DB::table('data_pasien')
        ->join('tindakan_pasien', 'data_pasien.no_pasien','=','tindakan_pasien.no_pasien')
        ->where('tindakan_pasien.nama_dokter','=',$nama_dokter)
        ->get()
        ->unique('data_pasien.no_pasien'); //hanya memanggill satu data yang unik untuk ditampilkan
        
        $namaDokter = $nama_dokter;
        
        return view('ListPasien',['dataPasien'=>$dataPasien])
        ->with(['namaDokter'=>$namaDokter]);
    }

    public function viewPasien($no_pasien)
    {
        $dataPasien = DB::table('data_pasien')
        ->join('medik_pasien','data_pasien.no_pasien','=','medik_pasien.no_pasien')
        ->where('medik_pasien.no_pasien','=',$no_pasien)
        ->get()
        ->unique('data_pasien.no_pasien');

        $dataTindakan = DB::table('data_pasien')
        ->join('tindakan_pasien','data_pasien.no_pasien','=','tindakan_pasien.no_pasien')
        ->where('tindakan_pasien.no_pasien','=',$no_pasien)
        ->get();

        return view('ViewPasien',['dataPasien'=>$dataPasien],['dataTindakan'=>$dataTindakan]);
    }

    public function editPasien($no_pasien)
    {

    }
      

}
