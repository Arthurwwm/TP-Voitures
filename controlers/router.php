<?php

    require_once 'controlerIndex.php';
    require_once 'controlerVoiture.php';
    require_once 'controlerConstructeur.php';
    require_once './views/view.php';

    class Router{

        private $ctrlIndex;
        private $ctrlVoiture;
        private $ctrlConstruct;

        public function __construct(){
            $this->ctrlIndex = new ControlerIndex();
            $this->ctrlVoiture = new ControlerVoiture();
            $this->ctrlConstruct = new ControlerConstructeur();
            $this->ctrlConstructs = new ControlerConstructeurs();
        }

        public function routeQuery(){
            try{
                if(isset($_GET['action'])){
                    if($_GET['action'] == 'voiture'){
                        $this->ctrlVoiture->voiture($_GET['id']);
                    }else if($_GET['action'] == 'index'){
                        $this->ctrlIndex->index();
                    }else if($_GET['action'] == 'constructeur'){
                        $this->ctrlConstruct->constructeur($_GET['id']);
                    }else if($_GET['action'] == 'constructeurs'){
                        $this->ctrlConstructs->constructeurs();
                    }
                } else{
                    $this->ctrlIndex->index();
                }
            } catch (Exception $e){
                echo 'OULALALA'.$e->getMessage();
            }
        }
    }