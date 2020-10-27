<?php

    require_once 'controlerIndex.php';
    require_once 'controlerVoiture.php';
    require_once './views/view.php';

    class Router{

        private $ctrlIndex;
        private $ctrlVoiture;

        public function __construct(){
            $this->ctrlIndex = new ControlerIndex();
            $this->ctrlVoiture = new ControlerVoiture();
        }

        public function routeQuery(){
            try{
                if(isset($_GET['action'])){
                    if($_GET['action'] == 'voiture'){
                        $this->ctrlVoiture->voiture($_GET['id']);
                    }else if($_GET['action'] == 'index'){
                        $this->ctrlIndex->index();
                    }
                } else{
                    $this->ctrlIndex->index();
                }
            } catch (Exception $e){
                echo 'OULALALA'.$e->getMessage();
            }
        }
    }