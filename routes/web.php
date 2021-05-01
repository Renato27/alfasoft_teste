<?php

use App\Http\Controllers\ContactoController;
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

Route::get('/', function () {
    return redirect()->route('contactos.index');
});

Route::resource('contactos', ContactoController::class);
Route::put('editar-contacto/{contacto}', [ContactoController::class, 'update']);
Route::delete('deletar-contacto/{contacto}', [ContactoController::class, 'destroy']);
