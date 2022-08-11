<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',\App\Http\Controllers\Auth\IndexController::class)->middleware('guest')->name('index');
Route::post('/',\App\Http\Controllers\Auth\LoginController::class)->middleware('guest')->name('login');
Route::get('/logout',\App\Http\Controllers\Auth\LogooutController::class)->middleware('auth')->name('logout');

Route::group([
    'middleware' => 'auth',
], function (){

    Route::get('/tenders',\App\Http\Controllers\Tender\IndexController::class)->name('tender.index');
    Route::get('/tenders/{id}',\App\Http\Controllers\Tender\ShowController::class)->name('tender.show');
    Route::get('/tender/create',\App\Http\Controllers\Tender\CreateController::class)->name('tender.create');
    Route::get('/tenders/{id}/edit',\App\Http\Controllers\Tender\EditController::class)->name('tender.edit');
    Route::post('/tenders',\App\Http\Controllers\Tender\StoreController::class)->name('tender.store');
    Route::put('/tenders/{id}',\App\Http\Controllers\Tender\UpdateController::class)->name('tender.update');

    Route::get('/offers',\App\Http\Controllers\Offer\IndexController::class)->name('offer.index');
    Route::get('/offers/{id}',\App\Http\Controllers\Offer\ShowController::class)->name('offer.show');
    Route::get('/offer/create',\App\Http\Controllers\Offer\CreateController::class)->name('offer.create');
    Route::get('/offers/{id}/edit',\App\Http\Controllers\Offer\EditController::class)->name('offer.edit');
    Route::post('/offers',\App\Http\Controllers\Offer\StoreController::class)->name('offer.store');
    Route::put('/offers/{id}',\App\Http\Controllers\Offer\UpdateController::class)->name('offer.update');

    Route::get('/suppliers',\App\Http\Controllers\Supplier\IndexController::class)->name('supplier.index');
    Route::get('/suppliers/{id}',\App\Http\Controllers\Supplier\ShowController::class)->name('supplier.show');
    Route::get('/supplier/create',\App\Http\Controllers\Supplier\CreateController::class)->name('supplier.create');
    Route::get('/suppliers/{id}/edit',\App\Http\Controllers\Supplier\EditController::class)->name('supplier.edit');
    Route::post('/suppliers',\App\Http\Controllers\Supplier\StoreController::class)->name('supplier.store');
    Route::put('/suppliers/{id}',\App\Http\Controllers\Supplier\UpdateController::class)->name('supplier.update');

});
