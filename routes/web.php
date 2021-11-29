<?php

use Illuminate\Support\Facades\Route;
use App\User;

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

//Login
// Route::get('user/login', 'AdminController@getLogin')->name('user.login');
// Route::post('user/login', 'AdminController@postLogin');

// Route::get('/', function () {
//     return view('layout/home');
// });

Route::get('/', function () {
    return view('auth/login');
})->name('auth.login')->middleware('auth'); 

Route::get('/login','LoginController@login')->name('login');
Route::post('/login','LoginController@actionlogin')->name('actionlogin');

// Route::get('/register','RegisterController@create')->name('create');
Route::get('register','Auth\RegisterController@index')->name('register');

// Route::resource('/register', 'Auth\RegisterController@index')->name('register');

// Route::post('/auth','RegisterController');
// Route::get('login', ['as' => 'login_path', 'uses' => 'Auth\LoginController@getLogin']);
// Route::get('register', ['as' => 'register_path', 'uses' => 'Auth\RegisterController@getRegister']);
// get('logout', ['as' => 'logout_path', 'uses' => 'Auth\AuthController@getLogout']);

// Route::controllers([
//     'auth' => 'Auth\AuthController',
//     'password' => 'Auth\PasswordController',
// ]);

// Route::get('/','Auth\LoginController@login')->name('login');
// // Route::get('register', ['as' => '', 'uses' => 'Auth\AuthController@register']);
// Route::get('/register','Auth\RegisterController@create')->name('register');

// Route::get('/', 'LoginController@actionlogin')->name('login');
// Route::post('actionlogin', 'LoginController@actionlogin')->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//PENGAWASAN
Route::get('pengawasan/add','PengawasanController@add')->middleware('auth');
Route::post('pengawasan/store','PengawasanController@store')->middleware('auth');
Route::get('pengawasan/data','PengawasanController@index')->middleware('auth');
Route::get('pengawasan/edit/{id_pengawasan}','PengawasanController@edit')->middleware('auth');
Route::patch('pengawasan/{id_pengawasan}','PengawasanController@editProsess')->middleware('auth');
Route::delete('pengawasan/{id_pengawasan}','PengawasanController@delete')->middleware('auth');
Route::get('pengawasan/cetak_pengawasan/{id_pengawasan}','PengawasanController@cetakPengawasan')->middleware('auth');
Route::get('/exportpengawasan','PengawasanController@pengawasanexport')->name('exportpengawasan')->middleware('auth');

//MONITORING
Route::get('monitoring/add','MonitoringController@add')->middleware('auth');
Route::post('monitoring/store','MonitoringController@store')->middleware('auth');
Route::get('monitoring/data','MonitoringController@index')->middleware('auth');
Route::get('monitoring/edit/{id_monitoring}','MonitoringController@edit')->middleware('auth');
Route::patch('monitoring/{id_monitoring}','MonitoringController@editProsess')->middleware('auth');
Route::delete('monitoring/{id_monitoring}','MonitoringController@delete')->middleware('auth');
Route::get('monitoring/cetak_monitoring/{id_monitoring}','MonitoringController@cetakMonitoring')->middleware('auth');
Route::get('/exportmonitoring','MonitoringController@monitoringexport')->name('exportmonitoring')->middleware('auth');

//PENCEGAHAN
Route::get('pencegahan/add','PencegahanController@add')->middleware('auth');
Route::post('pencegahan/store','PencegahanController@store')->middleware('auth');
Route::get('pencegahan/data','PencegahanController@index')->middleware('auth');
Route::get('pencegahan/edit/{id_pencegahan}','PencegahanController@edit')->middleware('auth');
Route::patch('pencegahan/{id_pencegahan}','PencegahanController@editProsess')->middleware('auth');
Route::delete('pencegahan/{id_pencegahan}','PencegahanController@delete')->middleware('auth');
Route::get('pencegahan/cetak_pencegahan/{id_pencegahan}','PencegahanController@cetakPencegahan')->middleware('auth');
Route::get('/exportpencegahan','PencegahanController@pencegahanexport')->name('exportpencegahan')->middleware('auth');

//KEGIATAN
Route::get('kegiatan/add','KegiatanController@add')->middleware('auth');
Route::post('kegiatan/store','KegiatanController@store')->middleware('auth');
Route::get('kegiatan/data','KegiatanController@index')->middleware('auth');
Route::get('kegiatan/edit/{id_kegiatan}','KegiatanController@edit')->middleware('auth');
Route::patch('kegiatan/{id_kegiatan}','KegiatanController@editProsess')->middleware('auth');
Route::delete('kegiatan/{id_kegiatan}','KegiatanController@delete')->middleware('auth');
Route::get('kegiatan/kegiatanexport','KegiatanController@kegiatanexport')->middleware('auth');
Route::get('kegiatan/cetak_kegiatan/{id_kegiatan}','KegiatanController@cetakKegiatan')->middleware('auth');
Route::get('/exportkegiatan','KegiatanController@kegiatanexport')->name('exportkegiatan')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
