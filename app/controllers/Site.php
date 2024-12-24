<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud{
    public function home(){
        require_once __DIR__ . '/../views/home.php';
    }
    public function about(){
        require_once __DIR__ . '/../views/about.php';
    }
    public function contact(){
        require_once __DIR__ . '/../views/contact.php';
    }
    public function cadastro(){
        $cadastro = $this->create();
        require_once __DIR__ . '/../views/cadastro.php';
    }
    public function consulta() {
        $consulta = $this->read();
        require_once __DIR__ . '/../views/consulta.php';
    }
    public function editar(){
        $editar = $this->editForm();
        require_once __DIR__ . '/../views/editar.php';
    }

    public function alterar(){
        $alterar = $this->update();    
        header('Location: ?router=Site/consulta');
    }

    public function confirmDelete(){
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        require_once __DIR__ . '/../views/confirmDelete.php';
    }
    public function deletar(){
        $deletar = $this->delete();
        header('Location: ?router=Site/consulta');
    }
}