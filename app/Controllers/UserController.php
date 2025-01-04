<?php 

namespace App\Controllers;

class UserController extends BaseController{

    
    public function index(){
        return $this->view('clientes.index');
    }

    //  recibir, imprimir nombre
    public function showName($name){
        return "El nombre recibido es: " . htmlspecialchars($name);
    }
}
