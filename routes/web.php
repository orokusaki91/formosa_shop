<?php

Route::get('about_us', 'Shop\AboutUs\AboutUsController@index')->name('about_us');

Route::get('contact', 'Shop\Contact\ContactController@index')->name('contact');