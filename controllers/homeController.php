<?php
class homeController extends Controller{
    public function index(){
        $Dados = array(
            'quantidade' => 5
        );

        $this->loadTemplate('home');
    }

}