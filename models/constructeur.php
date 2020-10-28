<?php

require_once 'model.php';

class Constructeur extends Model{

    //Selection d'un constructeur en fonction de son ID
    public function getConstructeur($idConstruct){
        $sql = "SELECT * FROM CONSTRUCTEUR WHERE id=?";
        $constructeur = $this->goQuery($sql, array($idConstruct));
        $retour = $constructeur->fetch();
        $constructeur->closeCursor();
        return $retour;
    }

    //Selection de tout les constructeurs
    public function getAllConstructeurs(){
        $sql = "SELECT * FROM CONSTRUCTEUR";
        $constructeurs = $this->goQuery($sql);
        return $constructeurs;
    }

    // Selection d'un constructeur au hasard.
    public function getRandomConstructeur(){
        $sql = "SELECT * FROM CONSTRUCTEUR ORDER BY RAND() LIMIT 1";
        $constructeur = $this->goQuery($sql);
        $retour = $constructeur->fetch();
        $constructeur->closeCursor();
        return $retour;
    }
}