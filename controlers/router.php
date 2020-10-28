<?php

    require_once 'controlerIndex.php';
    require_once 'controlerVoiture.php';
    require_once 'controlerConstructeur.php';
    require_once 'controlerLivreor.php';
    require_once './views/view.php';

    class Router{

        private $ctrlIndex;
        private $ctrlVoiture;
        private $ctrlVoitures;
        private $ctrlConstruct;
        private $ctrlConstructs;
        private $ctrlVoituresAnnee;
        private $ctrlVoituresMarque;
        private $ctrlLivreDor;

        public function __construct(){
            $this->ctrlIndex = new ControlerIndex();
            $this->ctrlVoiture = new ControlerVoiture();
            $this->ctrlVoitures = new ControlerVoitures();
            $this->ctrlConstruct = new ControlerConstructeur();
            $this->ctrlConstructs = new ControlerConstructeurs();
            $this->ctrlVoituresAnnee = new ControlerVoitureAnnee();
            $this->ctrlVoituresMarque = new ControlerVoituresMarque();
            $this->ctrlLivreDor = new ControlerLivreor();
        }

        public function routeQuery(){
            try{
                if(isset($_POST['action'])){
                    if($_POST['action'] == 'submit'){
                        $this->ctrlLivreDor->submit(htmlspecialchars($_POST['pseudo']),htmlspecialchars($_POST['message']),htmlspecialchars($_POST['note']));
                    }
                }
                if(isset($_GET['action'])){
                    if($_GET['action'] == 'voiture'){
                        $this->ctrlVoiture->voiture($_GET['id']);
                    }else if($_GET['action'] == 'index'){
                        $this->ctrlIndex->index();
                    }else if($_GET['action'] == 'constructeur'){
                        $this->ctrlConstruct->constructeur($_GET['id']);
                    }else if($_GET['action'] == 'constructeurs'){
                        $this->ctrlConstructs->constructeurs();
                    }else if($_GET['action'] == 'voitures'){
                        $this->ctrlVoitures->voitures();
                    }else if($_GET['action'] == 'voituresMarque'){
                        $this->ctrlVoituresMarque->voituresMarque($_GET['id']);
                    }else if($_GET['action'] == 'annee'){
                        $this->ctrlVoituresAnnee->voitureAnnee(isset($_GET['annee'])?$_GET['annee']:null);
                    }else if($_GET['action'] == 'livreor'){
                        $this->ctrlLivreDor->messages();
                    }else{
                        $this->ctrlIndex->index();
                    }
                } else{
                    $this->ctrlIndex->index();
                }
            } catch (Exception $e){
                echo 'OULALALA '.$e->getMessage();
            }
        }
    }