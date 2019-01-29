<?php

Route::post('newsletter', [
    'as' => 'newsletter.store',
    'uses' => 'ContinentesController@storeNewsletter'
]);

Route::post('contacto', [
    'as' => 'agencias.contact',
    'uses' => 'ContinentesController@contact'
]);


