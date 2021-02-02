<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\VisitorController;
use App\http\Controllers\BisitorController;
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



Route::post('save-regis', [VisitorController::class, 'store'])->name('save-regis');
Route::post('qr-code', [VisitorController::class, 'create'])->name('qr-code');

?>