<?php

use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

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
    return view('updated', [
        'users'=>App\Models\User::all()
    ]);
});

Route::post('import', function (){
    Excel::import(new UsersImport, request()->file('file'));
    return redirect()->back()->with('success', 'Данные загружены в базу');
});

Route::get('/updated','App\Http\Controllers\ClearBaseController@index');
