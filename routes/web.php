<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/perawat/login','PerawatController@Login');
Route::get('/admin/login','AdminController@Login');

Route::get('/LoginAdmin',function(){
    return view('LoginAdmin');
});

Route::get('/LoginPerawat',function(){
    return view('LoginPerawat');
});
Route::get('/MenuAdmin',function(){
    return view('MenuAdmin');
});
Route::get('/MenuPerawat',function(){
    return view('MenuPerawat');
});

Route::get('/Input','PasienController@input');
Route::post('/pribadipasien/store','PasienController@pribadiStore');

Route::post('/medikpasien/store','PasienController@medikStore');
Route::post('/tindakanpasien/store','PasienController@tindakanStore');
Route::get('/tambah/tindakan/{nomorPasien}','PasienController@tambahTindakan');

Route::get('/admin/inputperawat', function(){
    return view('InputPerawat');
});
Route::post('inputperawat/store','PerawatController@dataStore');

Route::get('/admin/inputdokter', function(){
    return view('InputDokter');
});
Route::post('/inputdokter/store','DokterController@dataStore');
Route::get('/admin/lihat','AdminController@sum');


Route::get('/lihat','DokterController@showSpes');
Route::get('/lihat/dokter/{spesialis}','DokterController@showDok');
Route::get('/lihat/pasien/{nama_dokter}','PasienController@showPasien');

Route::get('/pasien/view/{no_pasien}','PasienController@viewPasien');
Route::get('/pasien/edit/{no_pasien}','PasienController@editPribadiPasien');
Route::post('/pribadipasien/updatedata','PasienController@updatePribadiPasien');

Route::get('/datamedik/update/{no_pasien}','PasienController@editMedik');
Route::post('/medikpasien/update','PasienController@updateMedikPasien');

Route::get('/tindakan/update/{no_pasien}','PasienController@showTindakan');
Route::get('/tindakan/edit/{id_tindakan}','PasienController@editTindakan');

Route::post('/tindakanpasien/update','PasienController@updateTindakanPasien');
Route::get('/datapasien/print/{no_pasien}','PasienController@cetak_pdf');
