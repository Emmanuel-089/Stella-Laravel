<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumnoscontroller;

Route::get('/', function (){
    return view('welcome');
});


Route::get('altaalumno',[alumnoscontroller::class,'altaalumno'])->name('altaalumno');
Route::post('guardaralumno',[alumnoscontroller::class,'guardaralumno'])->name('guardaralumno');
Route::get('reportealumno',[alumnoscontroller::class,'reportealumno'])->name('reportealumno');
Route::get('modificaalumno/{ida}',[alumnoscontroller::class,'modificaalumno'])->name('modificaalumno');
Route::get('eliminaalumno/{ida}',[alumnoscontroller::class,'eliminaalumno'])->name('eliminaalumno');

Route::post('editaralumno',[alumnoscontroller::class,'editaralumno'])->name('editaralumno');
Route::get('desactivaalumno/{ida}',[alumnoscontroller::class,'desactivaalumno'])->name('desactivaalumno');
Route::get('activaalumno/{ida}',[alumnoscontroller::class,'activaalumno'])->name('activaalumno');
