<?php 

    namespace Lib;

    class Route {

        private  static $routes = [];

        //agregar rutas GET al array de rutas
        public static function get($uri, $callback){
            self::$routes['GET'][$uri] = $callback;
        }

        //agregar rutas POST al array de rutas
        public static function post($uri, $callback){
            self::$routes['POST'][$uri] = $callback;
        }

        //recuperar la uri y ejecutar la funcion callback
        public static function dispatch(){
            $uri = $_SERVER['REQUEST_URI'];
            echo $uri;
        }
    }

