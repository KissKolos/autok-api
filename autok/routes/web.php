<?php

Route::get('/', function(){
    return view('layouts.app');
})->name('home');