<?php

Route::group(['middleware' => ['admin']], function () {

    Route::get('admin/{seccion}', [
        'as' => 'admin.panel',
        'uses' => 'AdminPanelController@index'
    ]);

//USUARIOS
    Route::get('admin/usuarios/habilitar/{id}', [
        'as' => 'admin.usuarios.habilitar',
        'uses' => 'AdminPanelController@enableUser'
    ]);

    Route::get('admin/usuarios/deshabilitar/{id}', [
        'as' => 'admin.usuarios.deshabilitar',
        'uses' => 'AdminPanelController@disableUser'
    ]);

    Route::get('admin/usuarios/administrador/{id}', [
        'as' => 'admin.usuarios.administrador',
        'uses' => 'AdminPanelController@adminUser'
    ]);

    Route::get('admin/usuarios/mayorista/{id}', [
        'as' => 'admin.usuarios.mayorista',
        'uses' => 'AdminPanelController@mayoristaUser'
    ]);

    Route::get('admin/usuarios/editar/{id}', [
        'as' => 'admin.usuarios.editar',
        'uses' => 'AdminPanelController@editUser'
    ]);

    Route::put('admin/usuarios/actualizar/{id}}', [
        'as' => 'admin.usuarios.update',
        'uses' => 'AdminPanelController@updateUser'
    ]);

    Route::get('admin/usuarios/{id}', [
        'as' => 'admin.usuarios.perfil',
        'uses' => 'AdminPanelController@seeProfile'
    ]);

//CONTINENTES
    Route::get('admin/continente/{idContinente}', [
        'as' => 'admin.continente.seleccion',
        'uses' => 'AdminPanelController@opciones'
    ]);

    Route::post('admin/continente', [
        'as' => 'admin.continente.store',
        'uses' => 'AdminPanelController@storeContinente'
    ]);

    Route::get('admin/continente/editar/{id}', [
        'as' => 'admin.continente.editar',
        'uses' => 'AdminPanelController@editarContinente'
    ]);

    Route::put('admin/continente/update/{id}', [
        'as' => 'admin.continente.update',
        'uses' => 'AdminPanelController@updateContinente'
    ]);

    Route::delete('admin/continente/delete/{id}', [
        'as' => 'admin.continente.delete',
        'uses' => 'AdminPanelController@eliminarContinente'
    ]);


//PAQUETES
    Route::post('admin/paquete', [
        'as' => 'admin.paquete.store',
        'uses' => 'AdminPanelController@storePaquete'
    ]);

    Route::get('admin/paquete/editar/{id}', [
        'as' => 'admin.paquete.editar',
        'uses' => 'AdminPanelController@editarPaquete'
    ]);

    Route::put('admin/paquete/update/{id}', [
        'as' => 'admin.paquete.update',
        'uses' => 'AdminPanelController@updatePaquete'
    ]);

    Route::delete('admin/paquete/delete/{id}', [
        'as' => 'admin.paquete.delete',
        'uses' => 'AdminPanelController@eliminarPaquete'
    ]);

//OPCIONES
    Route::get('admin/opcion/editar/{id}', [
        'as' => 'admin.opcion.editar',
        'uses' => 'AdminPanelController@editarOpcion'
    ]);

    Route::post('admin/opcion', [
        'as' => 'admin.opcion.crear',
        'uses' => 'AdminPanelController@crearOpcion'
    ]);

    Route::put('admin/opcion/update/{id}', [
        'as' => 'admin.opcion.update',
        'uses' => 'AdminPanelController@updateOpcion'
    ]);

    Route::delete('admin/opcion/delete/{id}', [
        'as' => 'admin.opcion.delete',
        'uses' => 'AdminPanelController@eliminarOpcion'
    ]);

//IMAGES
    Route::post('admin/image/store/{id}', [
        'as' => 'admin.image.store',
        'uses' => 'AdminPanelController@storeImage'
    ]);

    Route::get('admin/image/principal/{id}', [
        'as' => 'admin.image.principal',
        'uses' => 'AdminPanelController@principalImage'
    ]);

    Route::delete('admin/image/delete/{id}', [
        'as' => 'admin.image.delete',
        'uses' => 'AdminPanelController@deleteImage'
    ]);

});

//VISUALIZAR ARCHIVOS
Route::get('ver-pdf/{file}', [
    'as' => 'admin.ver.pdf',
    'uses' => 'AdminPanelController@verPdf'
]);

Route::get('ver-image/{file}', [
    'as' => 'admin.ver.image',
    'uses' => 'AdminPanelController@verImage'
]);


