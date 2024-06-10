<?php

use App\Http\Controllers\Cekdatacontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatarumahController;
use App\Http\Controllers\sewaController;
use App\Livewire\Sewal;
use App\Livewire\Sewa;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
});

Route::resource('datarumah', DatarumahController::class);
Route::resource('cekdata', Cekdatacontroller::class);


Route::get('/sewa/create/{id}', [sewaController::class, 'create'])->name('sewa.create');
Route::post('/cekdata/store/{id}', [sewaController::class, 'store'])->name('cekdata.store');
