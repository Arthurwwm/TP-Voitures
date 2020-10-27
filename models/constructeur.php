<?php

require_once 'model.php';

class Constructeur extends Model{

    public function getConstructeur($idConstruct){
        $sql = "SELECT * FROM CONSTRUCTEUR WHERE id=?";
        $constructeur = $this->goQuery($sql, array($idConstruct));
        return $constructeur;
    }

    public function getRandomConstructeur(){
        $sql = "SELECT * FROM CONSTRUCTEUR ORDER BY RAND() LIMIT 1";
        $constructeur = $this->goQuery($sql);
        $retour = $constructeur->fetch();
        $constructeur->closeCursor();
        return $retour;
    }
}