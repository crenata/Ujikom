<?php

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

/*Route::get('/', function () {
    return view('home');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'management'], function () {
  Route::get('login', 'ManagementAuth\LoginController@showLoginForm')->name('management.login');
  Route::post('login', 'ManagementAuth\LoginController@login');
  Route::post('logout', 'ManagementAuth\LoginController@logout')->name('management.logout');

  Route::get('register', 'ManagementAuth\RegisterController@showRegistrationForm')->name('management.register');
  Route::post('register', 'ManagementAuth\RegisterController@register');

  Route::post('password/email', 'ManagementAuth\ForgotPasswordController@sendResetLinkEmail')->name('management.password.email');
  Route::post('password/reset', 'ManagementAuth\ResetPasswordController@reset')->name('management.password.update');
  Route::get('password/reset', 'ManagementAuth\ForgotPasswordController@showLinkRequestForm')->name('management.password.request');
  Route::get('password/reset/{token}', 'ManagementAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'peminjam'], function () {
  Route::get('login', 'PeminjamAuth\LoginController@showLoginForm')->name('peminjam.login');
  Route::post('login', 'PeminjamAuth\LoginController@login');
  Route::post('logout', 'PeminjamAuth\LoginController@logout')->name('peminjam.logout');

  Route::get('register', 'PeminjamAuth\RegisterController@showRegistrationForm')->name('peminjam.register');
  Route::post('register', 'PeminjamAuth\RegisterController@register');

  Route::post('password/email', 'PeminjamAuth\ForgotPasswordController@sendResetLinkEmail')->name('peminjam.password.email');
  Route::post('password/reset', 'PeminjamAuth\ResetPasswordController@reset')->name('peminjam.password.update');
  Route::get('password/reset', 'PeminjamAuth\ForgotPasswordController@showLinkRequestForm')->name('peminjam.password.request');
  Route::get('password/reset/{token}', 'PeminjamAuth\ResetPasswordController@showResetForm');
});

Route::resource('supplier', 'SupplierController');
Route::resource('barangmasuk', 'BarangMasukController');
Route::resource('barang', 'BarangController');
Route::resource('barangkeluar', 'BarangKeluarController');
Route::resource('pinjambarang', 'PinjamBarangController');
Route::resource('stok', 'StokController');