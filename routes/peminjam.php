<?php

Route::get('/', function () {
    // $users[] = Auth::user();
    // $users[] = Auth::guard()->user();
    $users[] = Auth::guard('peminjam')->user();

    //dd($users);

    return view('peminjam.home');
})->name('home');

