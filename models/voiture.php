<?php

require_once 'model.php';

class Voiture extends Model{

    public function getVoiture($idVoiture){
        $sql = "SELECT * FROM VOITURE WHERE id=?";
        $voiture = goQuery($sql, array($idVoiture));
        return $voiture;
    }
}