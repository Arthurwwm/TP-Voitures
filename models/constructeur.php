<?php

require_once 'model.php';

class Constructeur extends Model{

    public function getConstructeur($idConstruct){
        $sql = "SELECT * FROM CONSTRUCTEUR WHERE id=?";
        $constructeur = $this->goQuery($sql, array($idConstruct));
        $retour = $constructeur->fetch();
        $constructeur->closeCursor();
        return $retour;
    }
    public function getAllConstructeurs(){
        $sql = "SELECT * FROM CONSTRUCTEUR";
        $constructeurs = $this->goQuery($sql);
        // $retour = $constructeurs->fetch();
        // $constructeurs->closeCursor();
        return $constructeurs;
    }

    public function getRandomConstructeur(){
        $sql = "SELECT * FROM CONSTRUCTEUR ORDER BY RAND() LIMIT 1";
        $constructeur = $this->goQuery($sql);
        $retour = $constructeur->fetch();
        $constructeur->closeCursor();
        return $retour;
    }
}