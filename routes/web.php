<?php
/**
 * Global Routes
 */
// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController@swap')->name('lang');
Route::get('dir/{lang}', 'LanguageController@direction')->name('direction');

Route::group(['namespace' => 'Focus', 'as' => 'biller.', 'middleware' => 'biller'], function () {
includeRouteFiles(__DIR__.'/Focus/');
});
includeRouteFiles(__DIR__.'/General/');