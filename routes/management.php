<?php

Route::get('/', function () {
    // $users[] = Auth::user();
    // $users[] = Auth::guard()->user();
    $users[] = Auth::guard('management')->user();

    //dd($users);

    return view('management.home');
})->name('home');

