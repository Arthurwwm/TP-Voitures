<?php

require_once 'model.php';

class Constructeur extends Model{

    public function getConstructeur($idConstruct){
        $sql = "SELECT * FROM CONSTRUCTEUR WHERE id=?";
        $constructeur = $this->goQuery($sql, array($idConstruct));
        return $constructeur;
    }
}