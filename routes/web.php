<?php
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Manager\Dashboard as Mdash;
use App\Http\Livewire\Website\Home;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// for front site
Route::get('/',Home::class);
Route::get('/dash',Dashboard::class);
Route::get('/man',Mdash::class);