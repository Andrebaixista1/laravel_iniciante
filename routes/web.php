<?php

use App\Http\Controllers\jogosController;
use Illuminate\Support\Facades\Route;


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

// Route::get('/home', function () {
//     return view('welcome');
// });

// Route::view('/jogos','jogos');

// Route::get('/jogos',function(){
//     return "Hello World";
// });

// Route::view('/jogos','jogos',['id'=>'GTA']);

// Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
//     return view('jogos',['idJogo'=>$id,'nomeJogo'=>$name]);
// })->where('id','[0-9]+');

// Route::get('/jogos',[jogosController::class, 'index']);

// Route::get('/home',function(){
//     return view('welcome');
// })->name('home-index');

Route::prefix('jogos')->group(function(){
    Route::get('/',[JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create',[JogosController::class, 'create'])->name('jogos-create');
    Route::post('/',[JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit',[JogosController::class, 'edit'])->where('id','[0-9]+')->name('jogos-edit');
    Route::put('/{id}',[JogosController::class, 'update'])->where('id','[0-9]+')->name('jogos-update');
    Route::delete('/{id}',[JogosController::class, 'destroy'])->where('id','[0-9]+')->name('jogos-destroy');
});





Route::fallback(function(){
    return "Rota não localizada";
});