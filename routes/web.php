<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

Route::get('/',[EtudiantController::class,'Acceuil'])->name('Acceuil');
Route::any('Ajouter',[EtudiantController::class,'Ajouter'])->name('Ajouter');
Route::any('/Modifier/{id}',[EtudiantController::class,'Modifier'])->name('Modifier');
Route::any('/Supprimer/{id}',[EtudiantController::class,'Supprimer'])->name('Supprimer');