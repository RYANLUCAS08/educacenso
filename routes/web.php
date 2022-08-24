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

Route::get('/cursos/add', function () {
    return view('cursos.add');
});


Route::get('/periodos', function () {
    $periodos = DB::table('periodos')->get();
    return view('periodos.index', ['periodos' => $periodos]);
});

Route::get('/cursos', function () {
    $cursos = DB::table('cursos')->get();
    return view('cursos.index', ['cursos' => $cursos]);
});


Route::post('/periodos/store', function(Request $request){
    $data = $request->all();

    unset($data['_token']);

    DB::table('periodos')->insert($data);

    return redirect('/periodos');

});

Route::post('/cursos/store', function(Request $request){
    $data = $request->all();

    unset($data['_token']);

    DB::table('cursos')->insert($data);

    return redirect('/cursos');

});


Route::get('/periodos/{id}/edit', function ($id) {
    $periodo = DB::table('periodos')->where('id', $id)->first();
    return view('periodos.edit', ['periodo' => $periodo]);
});

Route::get('/cursos/{id}/edit', function ($id) {
    $curso = DB::table('cursos')->where('id', $id)->first();
    
    return view('cursos.edit', ['curso' => $curso]);
});

Route::post('/periodos/update', function (Request $request) {
    $data = $request->all();
    unset($data['_token']);
    $id = $data['id'];
    unset($data['id']);

   DB::table('periodos')->where('id', $id)->update($data);

   return redirect('/periodos');
});

Route::post('/cursos/update', function (Request $request) {
    $data = $request->all();
    unset($data['_token']);
    $id = $data['id'];
    unset($data['id']);

   DB::table('cursos')->where('id', $id)->update($data);

   return redirect('/cursos');
});

Route::get('/periodos/{id}/destroy', function ($id) {
    DB::table('periodos')->where('id', $id)->delete();
    return redirect('/periodos');
});

Route::get('/cursos/{id}/destroy', function ($id) {
    DB::table('cursos')->where('id', $id)->delete();
    return redirect('/cursos');
});