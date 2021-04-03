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

// Route::get('/', function () {
//     return view('welcome');
// });
class A
{
    public $cat = "d";
}

Route::get('/items', function () {
    $result = DB::select('select * from items');
    $ar = [new A, new A];
    foreach ($ar as $thing) {
        echo $thing->cat;
    }
    foreach ($result as $item) {
        print_r($item);
        echo $item->name;
    }
    Log::info("gelfsdf");
    Log::debug('Something happened!');
    return $ar;
    // return view('items', ["items" => $result]);
});
