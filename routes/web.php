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

Route::get('/admin/inputperawat', function(){
    return view('InputPerawat');
});
Route::post('inputperawat/store','PerawatController@dataStore');

Route::get('/admin/inputdokter', function(){
    return view('InputDokter');
});
Route::post('/inputdokter/store','DokterController@dataStore');
 
Route::get('/lihat',function(){
    return view('LihatData');
});
