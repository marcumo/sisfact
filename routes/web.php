	<?php

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
use App\Sistema;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sigerin/login', function () {
    return view('login');
 });
Route::get('/sigerin', function () {
    return view('login');
});
Route::get('sigerin/sistemas', function () {

    $sistemas = Sistema::all();
  	return view('sistemas', ['title' => 'Sistemas Eléctricos'], compact('sistemas'));

});
Route::get('sigerin/administracion', function () {
    return "administración";
});
Route::get('sigerin/sistemas/{anio}/{se}', function ($anio,$se) {
    return "h7";
});
Route::get('sigerin/layer', function () {
    return view('layer');
});
Route::get('/pruebacontroller', 'pruebacontroller@index');
Route::get('usuarios', function () {
    return view('usuarios');
});

Route::get('sistemas', function(){

    $sistemas = Sistema::where('CodEmp','ELC')->get();
    dd($sistemas);
});