<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\urlController;
use App\Models\Data;

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
   
     return Inertia::render('Welcome', [
        'name'=>'Edafe Emmanuel',
        'frameworks'=>['vue','inertia','laravel']
    ]); 
}); 

Route::get('/broadcast', function(){
    $data = Data::all();
    event(new App\Events\DataMessage($data));
    return Inertia::render('Broadcast', []); 
});
Route::post('/populate', [urlController::class, 'store']);

