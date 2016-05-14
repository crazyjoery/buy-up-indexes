<?php

Route::group(['namespace' => 'jpigmans\bui\Controllers', 'prefix' => 'jpigmans/bui'], function () {
    Route::get('/', ['as' => 'bui_path', 'uses' => 'BUIController@index']);
});
