<?php

use Illuminate\Http\Request;

Route::group(['namespace'=>'Crudpacakage\Crud\Http\Controllers'], function(){

    Route::resource('departments', DepartmentController::class);
    
});
