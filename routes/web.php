<?php

use App\Http\Controllers\Belajar;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Illuminate\Testing\Concerns\TestDatabases;

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

// Belajar Routing
route::get('/geprek', function () {
    return "Sambel Gowang";
});
route::get('/geprek/{name}', function ($name) {
    return "Sambel Gowang $name";
});

// Routing file Belajar.php

route::get('/form', [Belajar::class, 'view']);

// Routing Form

route::get('/input-form', function(){
    return view('formindex');
});

route::get('/test-db', [FormController::class, 'testDatabase']);