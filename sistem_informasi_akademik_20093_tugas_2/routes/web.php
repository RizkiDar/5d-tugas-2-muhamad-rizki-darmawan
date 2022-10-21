<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

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
Route::controller(MatakuliahController::class)->group(function () {
    Route::get('/insert_mk', 'insert');
    Route::get('/select_mk', 'select');
    Route::get('/update_mk', 'update');
    Route::get('/delete_mk', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert_mhs', 'insert');
    Route::get('/select_mhs', 'select');
    Route::get('/update_mhs', 'update');
    Route::get('/delete_mhs', 'delete');
});

Route::controller(DosenController::class)->group(function () {
    Route::get('/insert_dsn', 'insert');
    Route::get('/select_dsn', 'select');
    Route::get('/update_dsn', 'update');
    Route::get('/delete_dsn', 'delete');
});

Route::get('/', function () {
    $mhs = [
    'Yari Sumiari',
    'Sari Puspita',
    'Ahlulica Saumi',
    'Rizki Hidayat',
    'Tafiqurahman',
    'Jonatan Hutapea',
    'Stepen Chen',
    'Martius Colius',
    'Jajang Sudrajat',
    'Sujono Markono',
    ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});

Route::get('/dosen', function () {
    $dosen = [
    'Ahmad Soubarjo M.Kom',
    'Yayan Ruhyan M.Pd',
    'John Wick M.Pd',
    'Maman Uzumaki M.Kom',
    'Alexander Graham M.Ag',
    'Peter Quil M.Kom',
    'Steve Hidayat M.Kom',
    'Puni Sukiani M.Pd',
    'Lala Koalala M.Kom',
    'Lulu Kolulu M.Pd',
    ];
    return view('dosen')->with('dosen',$dosen);
});

Route::get('/matkul', function () {
    $matkul = [
    'Matematika Diskrit',
    'Pendidikan Pancasila',
    'Sejarah Indonesia',
    'Pemrograman Berbasis Mobile',
    'Pendidikan Akhlak',
    'Jaringan Komputer',
    'Rekayasa Perangkat Lunak',
    'Bahasa Inggris',
    'Algoritma Pemrograman',
    'Bahasa Indonesia',
    ];
    return view('matkul')->with('matkul',$matkul);
});

