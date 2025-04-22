<?php 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\AnggotaController; 

Route::get('/', function () { 
    return view('welcome'); 
}); 

// Menggunakan Route Resource untuk AnggotaController
Route::resource('anggota', AnggotaController::class); 
