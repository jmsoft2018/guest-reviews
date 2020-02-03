<?php

Route::group(['namespace' => 'GuestReviews\Controllers', 'prefix' => '/guest-reviews', 'middleware' => ['web']], function(){
    Route::get('/', 'GuestReviewController@index')->name('guest-reviews');
    Route::post('/', 'GuestReviewController@store')->name('guest-reviews.store');
    Route::delete('/destroy/{id}', 'GuestReviewController@destroy')->name('guest-reviews.destroy');
});