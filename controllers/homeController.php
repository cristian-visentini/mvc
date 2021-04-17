<?php
class homeController extends Controller{
    

    public function index(){
        $Anuncios = new Anuncios();
        $Usuarios = new Usuarios();
        $Dados = array(
            'quantidade' => $Anuncios->getQuantidade()
        );

        $this->loadTemplate('home');
    }

}