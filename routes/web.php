<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {

    //    extedning the layout file to the login page
    return view('auth.login');
});



Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');
      if ($username == 'admin' && $password == 'admin') {
          return redirect('/admin');
      } else {
          return redirect('/dashboard');
      }
});


Route::get('/register', function () {
    return view('auth.Register');
});

Route::get('/landingPage', function () {
    return view('pages.landingPage');
});

Route::get('/dashboard', function (Request $request) {
    //return dashboard and mylearning content
    return view('pages.Course.MyLearningContent');

});

Route::get('/Course', function ($request) {

    //return dashboard and mylearning content
    return view('pages.Course.Course');
});

Route::get('/Course/Trending', function () {
    //return dashboard and mylearning content
    return view('pages.TrendingCourse.TrendingCourse');
});
Route::get('/Course/Trending/2', function () {
    //return dashboard and mylearning content
    return view('pages.TrendingCourse.TrendingCourse2');
});
Route::get('/Course/Trending/3', function () {
    //return dashboard and mylearning content
    return view('pages.TrendingCourse.TrendingCourse3');
});

Route::get('/Course/Buy', function () {
    //return dashboard and mylearning content
    return view('pages.Course.BuyCourse');
});
Route::get('/Course/Buy/Pembayaran', function () {
    //return dashboard and mylearning content
    return view('pages.Course.Pembayaran');
});

Route::get('/Course/Buy/Pembayaran/detailPembayaran', function () {
    //return dashboard and mylearning content
    return view('pages.Course.detailPembayaran');
});

Route::get('/profil',
    function () {
        return view('pages.Profil.profil');
    });
// Auth::routes();
Route::get('/Sertifikasi', function () {
    //return dashboard and mylearning content
    return view('pages.Sertifikasi.sertifikasi');
});

Route::get('/Sertifikasi/DetailSertifikasi', function () {
    //return dashboard and mylearning content
    return view('pages.Sertifikasi.preview');
});

Route::get('/Sertifikasi/Pembayaran', function () {
    //return dashboard and mylearning content
    return view('pages.Sertifikasi.Pembayaran');
});

Route::get('/Sertifikasi/Pembayaran/detailPembayaran', function () {
    //return dashboard and mylearning content
    return view('pages.Sertifikasi.detailPembayaran');
});

Route::get('/admin', function () {
    return view('pages.admin.adminPage');
});

Route::get('/addCourse', function () {
    return view('pages.admin.addCourse');
});

Route::get('/editCourse', function () {
    return view('pages.admin.editCourse');
});

Route::get('/adminSertifikasi', function () {
    return view('pages.admin.adminSertifikasi');
});

Route::get('/addSertifikasi', function () {
    return view('pages.admin.addSertifikasi');
});

Route::get('/editSertifikasi', function () {
    return view('pages.admin.editSertifikasi');
});

Route::get('/attempt', function () {
    return view('pages.LearnPages.Sertifikasi');
});

Route::get('/attempt/result', function () {
    return view('pages.LearnPages.hasil');
});

Route::get('/learn', function () {
    return view('pages.LearnPages.Learn');
});
