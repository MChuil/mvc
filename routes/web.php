<?php 

    use Lib\Route;

    Route::get('/', function(){
        echo "Hola desde el punto de acceso";
    });
    Route::get('/contacto', function(){
        echo "Hola desde contacto";
    });
    Route::get('clientes', function(){
        echo "Hola desde clientes";
    });
    Route::get('nosotros', function(){
        echo "Hola desde nosotros";
    });


    Route::dispatch();