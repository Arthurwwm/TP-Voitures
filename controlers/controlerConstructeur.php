<?php
    require_once 'models/voiture.php';
    require_once 'models/constructeur.php';
    require_once 'views/view.php';

    class ControlerConstructeur{
        private $autos;
        private $constructeur;

        public function __construct(){
            $this->autos = new Voiture();
            $this->constructeur = new Constructeur();
        }

        public function constructeur($idConstructeur){
            $constructeur = $this->constructeur->getConstructeur($idConstructeur);
            $view = new Vue('Constructeur');
            $view->render(array('constructeur'=> $constructeur));

        }

    }