<?php
    require_once 'models/voiture.php';
    require_once 'models/constructeur.php';
    require_once 'views/view.php';

    class ControlerVoiture{
        private $autos;

        public function __construct(){
            $this->autos = new Voiture();
        }
        public function voiture($idVoiture){
            $voiture = $this->autos->getVoiture($idVoiture);
            $view = new Vue('Voiture');
            $view->render(array('voiture'=>$voiture));
        }
    }
    // class ControlerVoitures{
    //     private $autos;

    //     public function __construct(){
    //         $this->autos = new Voiture();
    //     }
    //     public function voitures(){
    //         $voitures = $this->autos->getAllVoitures();
    //         $view = new Vue('Voitures');
    //         $view->render(array('voitures'=>$voitures));
    //     }
    // }
    class ControlerVoitures{
        private $autos;
        private $page;

        public function __construct(){
            $this->autos = new Voiture();
        }
        public function voitures(){
            if(isset($_GET['page'])){
                $this->page = $_GET['page'];
            } else{
                $this->page = 1;
            }
            $voitures = $this->autos->getVoituresPage($this->page);
            $view = new Vue('Voitures');
            $view->render(array('voitures'=>$voitures));
        }
    }
    class ControlerVoituresMarque{
        private $autos;

        public function __construct(){
            $this->autos = new Voiture();
        }
        public function voituresMarque($idConstruct){
            $voitures = $this->autos->getVoituresConstructeur($idConstruct);
            $view = new Vue('VoituresMarque');
            $view->render(array('voitures'=>$voitures));
        }
    }
    class ControlerVoitureAnnee{
        private $autos;

        public function __construct(){
            $this->autos = new Voiture();
        }
        public function voitureAnnee($annee){
            $voitures = $this->autos->getVoitureAnnee($annee);
            $view = new Vue('Annee');
            $view->render(array('voitures'=>$voitures));
        }
    }