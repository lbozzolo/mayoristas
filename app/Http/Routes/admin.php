<?php

Route::get('admin/{seccion}', [
    'as' => 'admin.panel',
    'uses' => 'AdminPanelController@index'
]);