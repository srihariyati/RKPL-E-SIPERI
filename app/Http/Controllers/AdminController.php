<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function sum()
    {
        $jpasien    = DB::table('data_pasien')->get()->count();
        $jperawat   = DB::table('login_perawat')->get()->count();
        $jdokter    = DB::table('data_dokter')->get()->count();
        $jspesialis = DB::table('data_spesialis')->get()->count();
        
        $pasien     = DB::table('data_pasien')->get();
        $perawat    = DB::table('login_perawat')->get();
        $dokter     = DB::table('data_dokter')->get();

        return view('AdminLihat')
        ->with(['jpasien' =>$jpasien])
        ->with(['jperawat' =>$jperawat])
        ->with(['jdokter' =>$jdokter])
        ->with(['jspesialis' =>$jspesialis])
        ->with(['pasien' =>$pasien])
        ->with(['dokter' =>$dokter])
        ->with(['perawat' =>$perawat]);
    }

    public function Login(Request $request)
    {
        
        $result = DB::table('login_admin')->where('username',$request->username)->count();
        $pas = DB::table('login_admin')
        ->select('password')
        ->where('username',$request->username)
        ->first(); 

        if($result==1)
        {
            if($request->password == $pas->password){
                return view('MenuAdmin');
            }else{
                echo "<script>
                alert('password salah');
                </script>";
                return view("LandingPage");
            }
        }else{
            echo "<script>
            alert('Username Anda Tidak terdaftar');
            </script>";
            return view("LandingPage");            
            }
        }
}