<?php

Route::group([ 'namespace' => 'dlai286\BMI\Controllers', 'prefix' => 'bmi' ], function () {
    Route::get('/', [ 'as' => 'bmi_path', 'uses' => 'BMIController@index' ]);
});