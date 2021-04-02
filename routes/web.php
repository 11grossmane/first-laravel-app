<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

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

// $db->exec("CREATE TABLE items(id INTEGER PRIMARY KEY, name TEXT)");
// $db->exec("INSERT INTO items(name) VALUES('Name 1')");
// $db->exec("INSERT INTO items(name) VALUES('Name 10')");


Route::get('/', function () {

    $result = DB::select('select * from items');
    $r = ini_get('error_log');
    Log::info("gelfsdf");
    error_log('Some message here.');
    Log::debug('Something happened!');
    return;
});
