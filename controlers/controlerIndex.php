<?php

require_once 'models/voiture.php';
require_once 'models/constructeur.php';
require_once 'views/view.php';

class ControlerIndex{
    
    private $autos;
    private $constructeur;

    public function __construct(){
        $this->autos = new Voiture();
        $this->constructeur = new Constructeur();
    }
    public function index(){
        $voitures = $this->autos->getLastVoitures();
        $constructeur = $this->constructeur->getRandomConstructeur();
        $view = new Vue('Index');
        $view->render(array('voitures'=> $voitures,'constructeur'=>$constructeur));
    }
}