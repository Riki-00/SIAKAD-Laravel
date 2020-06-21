<?php

use GuzzleHttp\Middleware;
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
    return view('/home');
});
Route::get('/home', 'AdminController@home');


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');



// Route::get('/index', 'AdminController@index');
// Route::get('/login', 'LoginController@login');
// Route::get('/homeadmin', 'AdminController@homeadmin');
// Route::get('/admin/users/user', 'UsersController@index');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/index', 'AdminController@indexadmin');
    Route::get('/guru/index', 'AdminGuruController@indexGuru');
    Route::get('/siswa/index', 'AdminSiswaController@indexSiswa');

    // Data Guru SMA Negeri 6 Solok Selatan
    Route::get('/admin/guru/dt_guru', 'GuruController@index');
    Route::get('/admin/guru/dt_guru/view', 'GuruController@index_view');
    Route::get('/admin/guru/dt_guru/insert', 'GuruController@insert');
    Route::post('/admin/guru/dt_guru/create', 'GuruController@create');
    Route::get('/admin/guru/dt_guru/edit/{id}', 'GuruController@edit');
    Route::post('/admin/guru/dt_guru/update/{id}', 'GuruController@update');
    Route::get('/admin/guru/dt_guru/delete/{nip}', 'GuruController@delete');

    // Data siswa SMA Negeri 6 Solok Selatan
    Route::get('/admin/siswa/dt_siswa', 'SiswaController@index');
    Route::get('/admin/siswa/dt_siswa/view', 'SiswaController@index_view');
    Route::get('/admin/siswa/dt_siswa/insert', 'SiswaController@insert');
    Route::post('/admin/siswa/dt_siswa/create', 'SiswaController@create');
    Route::get('/admin/siswa/dt_siswa/edit/{id}', 'SiswaController@edit');
    Route::post('/admin/siswa/dt_siswa/update/{id}', 'SiswaController@update');
    Route::get('/admin/siswa/dt_siswa/delete/{nis}', 'SiswaController@delete');

    // Mata Pelajaran SMA Negeri 6 Solok Selatan
    Route::get('/admin/pelajaran/mt_pelajaran/', 'PelajaranController@index');
    Route::get('/admin/pelajaran/mt_pelajaran/view', 'PelajaranController@index_view');
    Route::get('/admin/pelajaran/mt_pelajaran/{nis}', 'PelajaranController@index');
    Route::get('/admin/pelajaran/mt_pelajaran/insert', 'PelajaranController@insert');
    Route::post('/admin/pelajaran/mt_pelajaran/create', 'PelajaranController@create');
    Route::get('/admin/pelajaran/mt_pelajaran/edit/{id}', 'PelajaranController@edit');
    Route::post('/admin/pelajaran/mt_pelajaran/update/{id}', 'PelajaranController@update');
    Route::get('/admin/pelajaran/mt_pelajaran/delete/{mata_pelajaran}', 'PelajaranController@delete');

    // Wali Kelas SMA Negeri 6 Solok Selatan
    Route::get('/admin/walkes/wl_kelas', 'WalkesController@index');
    Route::get('/admin/walkes/tambah_pelajaran/Matapelajaran/{id}', 'WalkesController@index1');
    Route::get('/admin/walkes/wl_kelas/view', 'WalkesController@index_view');
    Route::get('/admin/walkes/wl_kelas/insert', 'WalkesController@insert1');
    Route::post('/admin/walkes/tambah_pelajaran/create', 'WalkesController@create1');
    Route::get('/admin/walkes/wl_kelas/edit{id}', 'WalkesController@edit1');
    Route::post('/admin/walkes/wl_kelas/update/{id}', 'WalkesController@update1');

    Route::get('/admin/walkes/wl_kelas/insert', 'WalkesController@insert');
    Route::post('/admin/walkes/wl_kelas/create', 'WalkesController@create');
    Route::get('/admin/walkes/wl_kelas/edit/{id}', 'WalkesController@edit');
    Route::post('/admin/walkes/wl_kelas/update/{id}', 'WalkesController@update');
    Route::get('/admin/walkes/wl_kelas/delete/{nama_walas}', 'WalkesController@delete');

    // Jadwal Mata Pelajaran
    Route::get('/admin/jadwal/dt_jadwal', 'JadwalController@index');
    Route::get('/admin/jadwal/dt_jadwal/insert', 'JadwalController@insert');
    Route::post('/admin/jadwal/dt_jadwal/create', 'JadwalController@create');

    // Nilai Siswa SMA Negeri 6 Solok Selatan
    Route::get('/admin/nilaisiswa/dt_nilai', 'NilaiController@index');
    Route::get('/admin/nilaisiswa/edit_nilai/{id}', 'NilaiController@index2');


    // Print Data SMA Negeri 6 Solok Selatan
    Route::get('laporanguru', 'GuruController@exportPDF');
    Route::get('laporansiswa', 'SiswaController@exportPDF');
    Route::get('laporanwalkes', 'WalkesController@exportPDF');
    Route::get('laporanmatpel', 'PelajaranController@exportPDF');
});
