<?php

Route::get('/', 'PageController@index');

/* CMS */
    Route::get('/cms','CmsController@index');

    // insert
    Route::get('/cms/create','CmsController@create');
    Route::post('/cms','CmsController@store');

    //update
    Route::get('/cms/{id}/edit','CmsController@edit');
    Route::put('/cms/{id}','CmsController@update');

    //delete
    Route::delete('/cms/{id}','CmsController@destroy');
/* END CMS */

/* MOBILE */
    // Route::get('/mobile', function () {
    //     return view('mobile/index');
    // });
    // Route::get('/mobile/home', function (){
    //     return view('mobile/home');
    // });
    // Route::get('/mobile/about', function (){
    //     return view('mobile/about');
    // });

    Route::get('/mobile', 'PageController@index');
    Route::get('/mobile/door', 'PageController@door');
    Route::get('/mobile/home', 'PageController@home');
    Route::get('/mobile/about', 'PageController@about');
    Route::get('/mobile/digital-assistant', 'PageController@dsc');
    Route::get('/mobile/digital-world', 'PageController@dent');
    Route::get('/mobile/&co', 'PageController@nco');
    Route::get('/mobile/&co-reg-1', 'PageController@nco_reg_1');

    Route::get('/mobile/digital-chat&call', 'PageController@cnc');
    Route::get('/mobile/faq', 'PageController@faq');
    Route::get('/mobile/fitur', 'PageController@fitur');

    Route::post('/mobile/&co-reg-form', 'AndcoController@temp');
    Route::post('/mobile/&co-reg-2', 'AndcoController@temp2');
    Route::post('/mobile/&co-reg-3', 'AndcoController@temp3');
    Route::post('/mobile/&co-reg-form-final', 'AndcoController@store');

/* END MOBILE */

/* DESKTOP */
    Route::get('/desktop', 'PageController@index');
    Route::get('/door', 'PageController@door');
    Route::get('/home', 'PageController@home');
    Route::get('/about', 'PageController@about');
    Route::get('/digital-assistant', 'PageController@dsc');
    Route::get('/digital-world', 'PageController@dent');
    Route::get('/&co', 'PageController@nco');
    Route::get('/digital-chat&call', 'PageController@cnc');
    Route::get('/faq', 'PageController@faq');
    Route::get('/fitur', 'PageController@fitur');
    Route::get('/&co-reg-1', 'PageController@nco_reg_1');

    Route::post('/&co-reg-form-final', 'AndcoController@store_desktop');

/* END DESKTOP */


