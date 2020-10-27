<?php

require_once 'model.php';

class Voiture extends Model{

    public function getVoiture($idVoiture){
        $sql = "SELECT v.id, v.nom as voitNom, v.année_construct, v.resume, v.image, c.nom as constrNom FROM VOITURE v INNER JOIN CONSTRUCTEUR c ON v.id_constructeur = c.id WHERE v.id=?";
        $voiture = $this->goQuery($sql, array($idVoiture));
        $retour = $voiture->fetch();
        $voiture->closeCursor();
        return $retour;
    }

    public function getVoituresConstructeur($idConstructeur){
        $sql = "SELECT v.id as idVoit, v.nom as nomVoit, v.année_construct, v.image, c.nom as constNom, c.id as idConst FROM VOITURE v INNER JOIN CONSTRUCTEUR c ON v.id_constructeur = c.id WHERE c.id=?";
        $voitures = $this->goQuery($sql, array($idConstructeur));
        $retour = $voitures->fetchAll();
        $voitures->closeCursor();
        return $retour;
    }

    public function getAllVoitures($premier){
        $sql = "SELECT * FROM VOITURE ORDER BY id DESC LIMIT ?,6";
        $voitures = $this->goQuery($sql, array($premier));
        return $voitures;
    }
    public function countVoitures(){
        $sql = "SELECT COUNT(*) AS nbVoitures FROM VOITURES";
        $nbVoitures = $this->goQuery($sql);
        return $nbVoitures;
    }

    public function getLastVoitures(){
        $sql = "SELECT * FROM (SELECT * FROM VOITURE ORDER BY id DESC LIMIT 3) t ORDER BY id ASC";
        $voitures = $this->goQuery($sql);
        return $voitures;
    }

    public function getVoitureAnnee($annee){
        $sql = "SELECT * FROM VOITURE WHERE année_construct =?";
        $voitures = $this->goQuery($sql, array($annee));
        $retour = $voitures->fetchAll();
        $voitures->closeCursor();
        return $retour;
    }
}