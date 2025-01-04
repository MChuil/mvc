<?php 

    use Lib\Route;
    use App\Controllers\HomeController;
    use App\Controllers\UserController;


    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'home']);

    Route::get('/contacto', function(){
        return "Hola desde contacto";
    });

    Route::get('clientes', function(){
        return "Hola desde clientes";
    });

    Route::get('nosotros', function(){
        return "Hola desde nosotros";
    });
    
    Route::get('/course/category', function(){
        return "Hola desde el Course/Category";
    });
    
    Route::get('/course/prueba', function(){
        return "Hola desde el curso de prueba";
    });

    Route::get('/course/:language', function($language){
        return "Lenguaje: $language";
    });


    Route::get('usuarios', [UserController::class, 'index']); // vista clientes/index.php
    
    Route::get('usuarios/:nombre', function($nombre) {
        $controller = new UserController();
        return $controller->showName($nombre); // Imprime 
    });

    Route::dispatch();
