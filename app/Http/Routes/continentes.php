<?php

Route::get('continentes/{id}', [
    'as' => 'continentes.ver',
    'uses' => 'ContinentesController@verContinente'
]);