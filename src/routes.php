<?php

use Illuminate\Support\Facades\Route;

// Route::get('/teste', function () {

//     return []; //view('skeleton::folder.teste');
// });

Route::namespace('Bnw\Skeleton\Controllers')->group(function(){

    Route::get('/teste/index', 'TesteController@index')->name('sss');

});

