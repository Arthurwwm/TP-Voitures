<?php

require_once 'model.php';

class Voiture extends Model{

    public function getVoiture($idVoiture){
        $sql = "SELECT * FROM VOITURE WHERE id=?";
        $voiture = $this->goQuery($sql, array($idVoiture));
        return $voiture;
    }

    public function getVoituresConstructeur($idConstructeur){
        $sql = "SELECT v.nom, v.année_construct, v.image, c.nom FROM VOITURE v INNER JOIN CONSTRUCTEUR c ON v.id_constructeur = c.id WHERE c.id=?";
        $voitures = $this->goQuery($sql, array($idConstructeur));
        return $voitures;
    }

    public function getLastVoitures(){
        $sql = "SELECT * FROM (SELECT * FROM VOITURE ORDER BY id DESC LIMIT 3) t ORDER BY id ASC";
        $voitures = $this->goQuery($sql);
        return $voitures;
    }
}