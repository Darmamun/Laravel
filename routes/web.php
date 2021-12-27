<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\PenginapanController;
use App\Http\Controllers\RestoranController;
use App\Http\Controllers\WisataController;
use GuzzleHttp\Middleware;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about', [HomeController::class, 'about']);


Route::get('/abang', [KecamatanController::class, 'abang']);
Route::get('/bebandem', [KecamatanController::class, 'bebandem']);
Route::get('/karangasem', [KecamatanController::class, 'karangasem']);
Route::get('/kubu', [KecamatanController::class, 'kubu']);
Route::get('/manggis', [KecamatanController::class, 'manggis']);
Route::get('/rendang', [KecamatanController::class, 'rendang']);
Route::get('/selat', [KecamatanController::class, 'selat']);
Route::get('/sidemen', [KecamatanController::class, 'sidemen']);


Route::prefix('abang')->group (function(){

    Route::get('restoran', [RestoranController::class, 'abang']);
    
    Route::get('penginapan', [PenginapanController::class, 'abang']);

    Route::get('wisata', [WisataController::class, 'abang'])->name('abang');

    Route::get('abangdetail/{id_wisata}', [WisataController::class, 'abangdetail']);

    
});

Route::prefix('bebandem')->group (function(){

    Route::get('restoran', [RestoranController::class, 'bebandem']);
    
    Route::get('penginapan', [PenginapanController::class, 'bebandem']);

    Route::get('wisata', [WisataController::class, 'bebandem']);

    Route::get('bebandemdetail/{id_wisata}', [WisataController::class, 'bebandemdetail']);
    
});

Route::prefix('karangasem')->group (function(){

    Route::get('restoran', [RestoranController::class, 'karangasem']);
    
    Route::get('penginapan', [PenginapanController::class, 'karangasem']);

    Route::get('wisata', [WisataController::class, 'karangasem']);

    Route::get('karangasemdetail/{id_wisata}', [WisataController::class, 'karangasemdetail']);
    
});

Route::prefix('kubu')->group (function(){

    Route::get('restoran', [RestoranController::class, 'kubu']);
    
    Route::get('penginapan', [PenginapanController::class, 'kubu']);

    Route::get('wisata', [WisataController::class, 'kubu']);

    Route::get('kubudetail/{id_wisata}', [WisataController::class, 'kubudetail']);
    
});

Route::prefix('manggis')->group (function(){

    Route::get('restoran', [RestoranController::class, 'manggis']);
    
    Route::get('penginapan', [PenginapanController::class, 'manggis']);

    Route::get('wisata', [WisataController::class, 'manggis']);

    Route::get('manggisdetail/{id_wisata}', [WisataController::class, 'manggisdetail']);
    
});

Route::prefix('rendang')->group (function(){

    Route::get('restoran', [RestoranController::class, 'rendang']);
    
    Route::get('penginapan', [PenginapanController::class, 'rendang']);

    Route::get('wisata', [WisataController::class, 'rendang']);

    Route::get('rendangdetail/{id_wisata}', [WisataController::class, 'rendangdetail']);
    
});

Route::prefix('selat')->group (function(){

    Route::get('restoran', [RestoranController::class, 'selat']);
    
    Route::get('penginapan', [PenginapanController::class, 'selat']);

    Route::get('wisata', [WisataController::class, 'selat']);

    Route::get('selatdetail/{id_wisata}', [WisataController::class, 'selatdetail']);
    
});

Route::prefix('sidemen')->group (function(){

    Route::get('restoran', [RestoranController::class, 'sidemen']);
    
    Route::get('penginapan', [PenginapanController::class, 'sidemen']);

    Route::get('wisata', [WisataController::class, 'sidemen']);

    Route::get('sidemendetail/{id_wisata}', [WisataController::class, 'sidemendetail']);
    
});
//Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//hak akses admin
Route::group(['middleware'=> 'admin'], function() {
    Route::get('abang/addabang', [WisataController::class, 'addabang']);

    Route::post('abang/abanginsert', [WisataController::class, 'abanginsert']);

    Route::get('abang/editabang/{id_wisata}', [WisataController::class, 'editabang']);

    Route::post('abang/update/{id_wisata}', [WisataController::class, 'updateabang']);
    
    Route::get('abang/delete/{id_wisata}', [WisataController::class, 'deleteabang']);

//bebandem
    Route::get('bebandem/addbebandem', [WisataController::class, 'addbebandem']);

    Route::post('bebandem/bebandeminsert', [WisataController::class, 'bebandeminsert']);

    Route::get('bebandem/editbebandem/{id_wisata}', [WisataController::class, 'editbebandem']);

    Route::post('bebandem/update/{id_wisata}', [WisataController::class, 'updatebebandem']);
    
    Route::get('bebandem/delete/{id_wisata}', [WisataController::class, 'deletebebandem']);

//karangasem
    Route::get('karangasem/addkarangasem', [WisataController::class, 'addkarangasem']);

    Route::post('karangasem/karangaseminsert', [WisataController::class, 'karangaseminsert']);

    Route::get('karangasem/editkarangasem/{id_wisata}', [WisataController::class, 'editkarangasem']);

    Route::post('karangasem/update/{id_wisata}', [WisataController::class, 'updatekarangasem']);
    
    Route::get('karangasem/delete/{id_wisata}', [WisataController::class, 'deletekarangasem']);

//kubu
    Route::get('kubu/addkubu', [WisataController::class, 'addkubu']);

    Route::post('kubu/kubuinsert', [WisataController::class, 'kubuinsert']);

    Route::get('kubu/editkubu/{id_wisata}', [WisataController::class, 'editkubu']);

    Route::post('kubu/update/{id_wisata}', [WisataController::class, 'updatekubu']);

    Route::get('kubu/delete/{id_wisata}', [WisataController::class, 'deletekubu']);

//manggis
    Route::get('manggis/addmanggis', [WisataController::class, 'addmanggis']);

    Route::post('manggis/manggisinsert', [WisataController::class, 'manggisinsert']);

    Route::get('manggis/editmanggis/{id_wisata}', [WisataController::class, 'editmanggis']);

    Route::post('manggis/update/{id_wisata}', [WisataController::class, 'updatemanggis']);

    Route::get('manggis/delete/{id_wisata}', [WisataController::class, 'deletemanggis']);

//rendang
    Route::get('rendang/addrendang', [WisataController::class, 'addrendang']);

    Route::post('rendang/rendanginsert', [WisataController::class, 'rendanginsert']);

    Route::get('rendang/editrendang/{id_wisata}', [WisataController::class, 'editrendang']);

    Route::post('rendang/update/{id_wisata}', [WisataController::class, 'updaterendang']);

    Route::get('rendang/delete/{id_wisata}', [WisataController::class, 'deleterendang']);

//selat
    Route::get('selat/addselat', [WisataController::class, 'addselat']);

    Route::post('selat/selatinsert', [WisataController::class, 'selatinsert']);

    Route::get('selat/editselat/{id_wisata}', [WisataController::class, 'editselat']);

    Route::post('selat/update/{id_wisata}', [WisataController::class, 'updateselat']);

    Route::get('selat/delete/{id_wisata}', [WisataController::class, 'deleteselat']);

//sidemen
    Route::get('sidemen/addsidemen', [WisataController::class, 'addsidemen']);

    Route::post('sidemen/sidemeninsert', [WisataController::class, 'sidemeninsert']);

    Route::get('sidemen/editsidemen/{id_wisata}', [WisataController::class, 'editsidemen']);

    Route::post('sidemen/update/{id_wisata}', [WisataController::class, 'updatesidemen']);

    Route::get('sidemen/delete/{id_wisata}', [WisataController::class, 'deletesidemen']);
}