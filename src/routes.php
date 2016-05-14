<?php

Route::group(['namespace' => 'Jpigmans\BUI\Controllers', 'prefix' => 'jpigmans/bui'], function () {
    Route::get('/', ['as' => 'bui_path', 'uses' => 'BUIController@index']);
});