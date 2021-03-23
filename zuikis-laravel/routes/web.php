<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GardenController;
use App\Http\Controllers\PostCalculatorController;
use App\Http\Controllers\BoxController;

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
    return view('welcome');
});

Route::get('lara', function () {
    return 'Labas Laravel';
});
// 'index' -> metodo vardas, kuris pasileis automatiskai
Route::get('gates/{vaisius}/{id}', [GardenController::class, 'index']);

Route::get('calc', [PostCalculatorController::class, 'show'])->name('show-cal');

Route::post('calc', [PostCalculatorController::class, 'calc'])->name('do-math');

Route::group(['prefix' => 'box'], function(){
    Route::get('', [BoxController::class, 'index'])->name('box.index');
    Route::get('create', [BoxController::class, 'create'])->name('box.create'); // rodo tuscia forma
    Route::post('store', [BoxController::class, 'store'])->name('box.store'); // uzsaugo musu nauja boksa
    Route::get('edit/{box}', [BoxController::class, 'edit'])->name('box.edit'); // rodo uzpildyta forma (tik rodo)
    Route::post('update/{box}', [BoxController::class, 'update'])->name('box.update'); // uzasugo konkretu redaguota boksa
    Route::get('add/{box}', [BoxController::class, 'add'])->name('box.add'); // rodo pridejimo laukeli
    Route::post('add-to-box/{box}', [BoxController::class, 'addToBox'])->name('box.add_to_box'); // prideda ir uzsaugo
    Route::post('delete/{box}', [BoxController::class, 'destroy'])->name('box.destroy');
    Route::get('show/{box}', [BoxController::class, 'show'])->name('box.show');
 });