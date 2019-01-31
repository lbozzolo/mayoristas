<?php

Route::post('newsletter', [
    'as' => 'newsletter.store',
    'uses' => 'ContinentesController@storeNewsletter'
]);

Route::post('contacto', [
    'as' => 'agencias.contact',
    'uses' => 'ContinentesController@contact'
]);

Route::get('contratacion', [
    'as' => 'agencias.contratacion',
    'uses' => 'ContinentesController@contratacion'
]);

Route::get('terminos-y-condiciones', [
    'as' => 'agencias.terminosycondiciones',
    'uses' => 'ContinentesController@terminosYCondiciones'
]);


