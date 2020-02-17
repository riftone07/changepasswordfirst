<?php

Route::group(['namespace' => 'riftone07\changepasswordfirst\Http\Controllers'], function(){
	Route::get('motdepasse/expired', 'ChangePasswordFirstController@expired')->name('motdepasse.expired');
	Route::post('motdepasse/post_expired', 'ChangePasswordFirstController@postExpired')->name('motdepasse.post_expired');
});
