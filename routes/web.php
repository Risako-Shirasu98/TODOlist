<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
# get で /folders/{id}/tasks にリクエストが来たら TaskController コントローラーの index メソッドを呼びだす
