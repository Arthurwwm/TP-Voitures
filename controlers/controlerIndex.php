<?php

require_once 'models/voiture.php';
require_once 'views/view.php';

class ControlerIndex{
    
    private $autos;

    public function __construct(){
        $this->autos = new Voiture();
    }
    public function index(){
        $voitures = $this->autos->getLastVoitures();
        $view = new Vue('Index');
        $view->render(array('voitures'=> $voitures));
    }
}