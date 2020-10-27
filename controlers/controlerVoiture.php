<?php
    require_once 'models/voiture.php';
    require_once 'models/constructeur.php';
    require_once 'views/view.php';

    class ControlerVoiture{
        private $autos;
        private $constructeur;

        public function __construct(){
            $this->autos = new Voiture();
            $this->constructeur = new Constructeur();
        }
        public function voiture($idVoiture){
            $voiture = $this->autos->getVoiture($idVoiture);
            $view = new Vue('Voiture');
            $view->render(array('voiture'=>$voiture));
        }
    }
    class ControlerVoitures{
        private $autos;
        private $constructeur;

        public function __construct(){
            $this->autos = new Voiture();
            $this->constructeur = new Constructeur();
        }
        public function voitures(){
            $voitures = $this->autos->getAllVoitures();
            $view = new Vue('Voitures');
            $view->render(array('voitures'=>$voitures));
        }
    }