<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

/**Unions */
Route::get('union-full', 'UnionController@index')->name('union-full');

Route::get('union-full/create-union{union_id?}', 'UnionController@create')->name('create-union');

Route::post('union-full/create-union', 'UnionController@save')->name('save-union');

Route::get('union-full/delete-union{union_id?}', 'UnionController@delete')->name('delete-union');

// Route::get('union-full/edit-union/', 'UnionController@edit')->name('edit-union');

/**Polls */
Route::get('union-poll', 'PollController@index')->name('union-poll');

Route::get('union-poll/create-poll', 'PollController@create')->name('create-poll');

Route::post('union-poll/create-poll', 'PollController@save')->name('save-poll');