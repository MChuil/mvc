<?php 

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends BaseController{

    public function index(){
        $contact = new Contact();
        //$response = $contact->all();
        //$response = $contact->find(2);
        //$response = $contact->where('id', '=', 2)->get();
        $response = $contact->where('phone', '1234567890')->get();
        echo json_encode($response);
        die;
        $data = [
            'title' => 'Inicio de MVC',
            'description' => 'Bienvenido a la página de inicio'
        ];

        return $this->view('home', $data);
    }

    public function home(){
        return "Inicio de MVC";
    }

}
