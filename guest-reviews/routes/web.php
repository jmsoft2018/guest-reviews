<?php

Route::group(['namespace' => 'GuestReviews\Controllers', 'prefix' => '/guest-reviews'], function(){

    Route::get('/', 'GuestReviewController@index');

});