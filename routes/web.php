<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\equipocontroller;

Route::get('/', function (){
    return view('welcome');
});



//Route::post('guardaralumno',[alumnoscontroller::class,'guardaralumno'])->name('guardaralumno');
Route::get('reportecomputadora',[equipocontroller::class,'reportecomputadora'])->name('reportecomputadora');

//Route::get('activaalumno/{ida}',[alumnoscontroller::class,'activaalumno'])->name('activaalumno');
