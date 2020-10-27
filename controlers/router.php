<?php

    require_once 'controlerIndex.php';
    require_once './views/view.php';

    class Router{

        private $ctrlIndex;

        public function __construct(){
            $this->ctrlIndex = new ControlerIndex();
        }

        public function routeQuery(){
            try{
                if(isset($_GET['action'])){

                } else{
                    $this->ctrlIndex->index();
                }
            } catch (Exception $e){
                echo 'OULALALA'.$e->getMessage();
            }
        }
    }