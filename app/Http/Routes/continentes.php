<?php

Route::get('continentes/{id}', [
    'as' => 'continentes.ver',
    'uses' => 'ContinentesController@verContinente'
]);

Route::get('continentes/paquete/{id}', [
    'as' => 'continentes.paquete.ver',
    'uses' => 'ContinentesController@verPaquete'
]);