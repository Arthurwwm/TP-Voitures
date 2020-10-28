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
    class ControlerVoitures{
        private $autos;
        private $page;

        public function __construct(){
            $this->autos = new Voiture();
        }
        public function voitures(){
            //Si aucune page n'est spécifiée dans l'url -> go page 1
            if(isset($_GET['page'])){
                $this->page = $_GET['page'];
            } else{
                $this->page = 1;
            }
            //On détermine le nombre de pages nécessaire en fonction du nombre total de voiture et du nombre de voitures que l'on souhaite afficher par page (ici 6)
            $nbPages = ceil(($this->autos->countVoitures()/6)<1?1:$this->autos->countVoitures()/6);

            $voitures = $this->autos->getVoituresPage($this->page);
            $view = new Vue('Voitures');
            $view->render(array('voitures'=>$voitures, 'nbPages'=>$nbPages));
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