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

Route::get('/', function () {
    return view('welcome');
});

// Retornando uma view, um arquivo com instrução html que pode ser usado dinaminamente... que fica na pasta resources
// Route::get('/helloworld', function () {
//     return view('helloworld');
// });

// Renderizando instruções html direito sem usar views
// Route::get('/hello/{name}', function($name) {
//     return '<h1> Hello ' . strtoupper($name) . '</h1>';
// });

// Route::get('/hello/{name?}', function($name = null) {
//     return '<h1> Hello, ' . strtoupper($name) . '</h1>';
// });

// Utilizado controller pra me retornar resultados
Route::get('/hello', [\App\Http\Controllers\HelloWorldController::class, 'helloWorld']);

Route::get('/hello/{name?}', [\App\Http\Controllers\HelloWorldController::class, 'hello']);

Route::get('/queries/{event}', function($event) {
    // $events = \App\Models\Event::all(); // e igual a um SELECT * FROM events
    // $events = \App\Models\Event::all(['title', 'description']); // igual a  SELECT title, description FROM events
    // $event = \App\Models\Event::where('id', 1)->get()->first(); // SELECT * FROM events WHERE id = 1
    $event = \App\Models\Event::find($event); // SELECT * FROM events WHERE id = 1

    return $event;

});
