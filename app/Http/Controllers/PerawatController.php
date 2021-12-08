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

    public function Login(Request $request)
    {
        $result = DB::table('login_perawat')->where('no_pegawai',$request->nomorpegawai)->count();
        $pas = DB::table('login_perawat')
        ->select('password')
        ->where('no_pegawai',$request->nomorpegawai)
        ->first(); 

        if($result==1)
        {
            if($request->password == $pas->password){
                return view('MenuPerawat');
            }else{
                echo "<script>
                alert('password salah');
                </script>";
                return view("LandingPage");
            }
        } else{
            echo "<script>
            alert('No Pegawai Tidak terdaftar');
            </script>";
            return view("LandingPage");
            }
        }
    }