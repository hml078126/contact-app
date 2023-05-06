<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;




Route::get('/', function () {
    return view('welcome');
});


// companies
Route::get('/companies', [CompanyController::class,'index'])->name('companies.index');

Route::get('/companies/create', [CompanyController::class,'create'])->name('companies.create');

Route::get('/companies/{id}', [CompanyController::class,'show'])->name('companies.show');


Route::get('/contacts', [ContactController::class,'index'])->name('contacts.index');

Route::get('/contacts/create', [ContactController::class,'create'])->name('contacts.create');

Route::get('/contacts/{id}', [ContactController::class,'show'])->name('contacts.show');

Route::get('/contacts/destroy/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// =============================================

// countries routes

// Route::get('/countries', function () {
//     return view('countries.index');
// })->name('countries.index');

Route::get('/countries',[CountryController::class, 'index'])->name('countries.index');

Route::get('/countries/create',[CountryController::class, 'create'])->name('countries.create');
Route::post('/countries/store',[CountryController::class, 'store'])->name('countries.store');

Route::get('/countries/destroy/{id}',[CountryController::class, 'destroy'])->name('countries.destroy');

Route::get('/countries/show/{id}',[CountryController::class, 'show'])->name('countries.show');

Route::get('/countries/edit/{id}',[CountryController::class, 'edit'])->name('countries.edit');
Route::put('/countries/update/{id}',[CountryController::class, 'update'])->name('countries.update');
