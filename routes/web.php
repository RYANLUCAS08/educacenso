<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

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

Route::get('/periodos/add', function () {
    return view('periodos.add');
});

Route::get('/periodos', function () {
    $periodos = DB::table('periodos')->get();
    return view('periodos.index', ['periodos' => $periodos]);
});

Route::get('/periodos/{id}', function ($id) {
    return view('welcome');
});



Route::post('/periodos/store', function(Request $request){
    $data = $request->all();

    unset($data['_token']);

    DB::table('periodos')->insert($data);

    return redirect('/periodos');

});

Route::get('/periodos/{id}/edit', function ($id) {
    $periodo = DB::table('periodos')->where('id', $id)->first();
    return view('periodos.edit', ['periodo' => $periodo]);
});

Route::post('/periodos/update', function (Request $request) {
    $data = $request->all();
    unset($data['_token']);
    $id = $data['id'];
    unset($data['id']);

   DB::table('periodos')->where('id', $id)->update($data);

   return redirect('/periodos');
});

Route::get('/periodos/{id}/destroy', function ($id) {
    DB::table('periodos')->where('id', $id)->delete();
    return redirect('/periodos');
});



// get /periodos
// get /periodos/{id}
// get /periodos/add
// post /periodos/store
// get /periodos/{id}/edit
// post /periodos/{id}/update
// post /periodos/{id}/destroy
