<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\usd\aquacultureController;
use App\Http\Controllers\usd\pumpController;
use App\Http\Controllers\usd\waterController;

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

Route::get('/news', 'newsController@index')->name('news.index');
Route::get('/contactus', 'contactController@index')->name('contact.index');
Route::post('/contact', [contactController::class, 'send'])->name('contact.send');
Route::get('/project', 'pageController@project')->name('project.index');
Route::get('/publicnews', 'pageController@news')->name('publicnews.index');

Route::get('/publicnews', [pageController::class, 'news'])->name('publicnews.index');
Route::get('/project', [pageController::class, 'project'])->name('project.index');
Route::get('/contactus', [contactController::class, 'index'])->name('contact.index');
Route::get('/', [MainController::class, 'index']);
//AQUACULTURE
Route::get('/aguaculture/aire02', [aquacultureController::class, 'aire2index'])->name('aqua.aire2');
Route::get('/aguaculture/autopump', [aquacultureController::class, 'autopumpindex'])->name('aqua.autopump');
Route::get('/aguaculture/d3diatomenchancer', [aquacultureController::class, 'diatomindex'])->name('d3.diatom');
Route::get('/aguaculture/diffuser', [aquacultureController::class, 'diffuserindex'])->name('diff.user');
Route::get('/aguaculture/shrimshield', [aquacultureController::class, 'shrimpindex'])->name('shrimp.shield');
Route::get('/aguaculture/submersible', [aquacultureController::class, 'submersibleindex'])->name('sub.sible');
//Pumps
Route::get('/pumps/api610', [pumpController::class, 'api'])->name('api.pump');
Route::get('/pumps/firepumps', [pumpController::class, 'firepump'])->name('fire.pump');
Route::get('/pumps/horizontalcentrifugal', [pumpController::class, 'horizontal'])->name('hori.pump');
Route::get('/pumps/magneticdrive', [pumpController::class, 'magnetic'])->name('magnet.pump');
//Water
Route::get('/water/aire02aspirator', [waterController::class, 'argos'])->name('argos.water');
Route::get('/water/aire02argus', [waterController::class, 'aspirator'])->name('aspirator.water');
Route::get('/water/aire02BIOFFILM', [waterController::class, 'bio'])->name('bio.water');
Route::get('/water/aire02Mixer', [waterController::class, 'mixer'])->name('mixer.water');
Route::get('/water/aire02Triton', [waterController::class, 'triton'])->name('triton.water');
Route::get('/water/HALO', [waterController::class, 'halo'])->name('halo.water');
Route::get('/water/microfloat', [waterController::class, 'micro'])->name('micro.water');
Route::get('/water/trioval', [waterController::class, 'trioval'])->name('trioval.water');


Route::get('/home', 'HomeController@index')->name('home');