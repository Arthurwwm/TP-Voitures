<?php

require_once 'model.php';

class Voiture extends Model{

    const PAGE = 6;

    //Selection d'une voiture en fonction de son ID
    public function getVoiture($idVoiture){
        $sql = "SELECT v.id, v.nom as voitNom, v.année_construct, v.resume, v.image, c.nom as constrNom FROM VOITURE v INNER JOIN CONSTRUCTEUR c ON v.id_constructeur = c.id WHERE v.id=?";
        $voiture = $this->goQuery($sql, array($idVoiture));
        $retour = $voiture->fetch();
        $voiture->closeCursor();
        return $retour;
    }

    //Selection de toutes les voiture d'un constructeur en fonction de son ID
    public function getVoituresConstructeur($idConstructeur){
        $sql = "SELECT v.id as idVoit, v.nom as nomVoit, v.année_construct, v.image, c.nom as constNom, c.id as idConst FROM VOITURE v INNER JOIN CONSTRUCTEUR c ON v.id_constructeur = c.id WHERE c.id=?";
        $voitures = $this->goQuery($sql, array($idConstructeur));
        $retour = $voitures->fetchAll();
        $voitures->closeCursor();
        return $retour;
    }

    //Selection de toutes les voitures
    public function getAllVoitures(){
        $sql = "SELECT * FROM VOITURE";
        $voitures = $this->goQuery($sql);
        return $voitures;
    }

    //Compte de toutes les voitures
    public function countVoitures(){
        $sql = "SELECT COUNT(*) AS nbVoit FROM VOITURE";
        $nbVoitures = $this->goQuery($sql);
        $retour = $nbVoitures->fetch();
        $retour = (int)$retour['nbVoit'];
        return $retour;
    }

    //Selection des 3 dernières voitures ajoutées dans la db
    public function getLastVoitures(){
        $sql = "SELECT * FROM (SELECT * FROM VOITURE ORDER BY id DESC LIMIT 3) t ORDER BY id ASC";
        $voitures = $this->goQuery($sql);
        return $voitures;
    }

    //Selection de toutes les voitures en fonction d'une année de construction
    public function getVoitureAnnee($annee){
        $sql = "SELECT * FROM VOITURE WHERE année_construct =?";
        $voitures = $this->goQuery($sql, array($annee));
        $retour = $voitures->fetchAll();
        $voitures->closeCursor();
        return $retour;
    }

    //Selection des voitures en fonction de la pagination
    public function getVoituresPage($page){
        //On détermine la première voiture à afficher
        $premier = ($page*self::PAGE)-self::PAGE;
        //Requete avec LIMIT qui determinera les 6 voitures à retourner
        $sql = "SELECT * FROM VOITURE ORDER BY id DESC LIMIT ?, ?";
        $voitures = $this->getDb()->prepare($sql);
        $voitures->bindValue(1,$premier,PDO::PARAM_INT);
        $voitures->bindValue(2,self::PAGE,PDO::PARAM_INT);
        $voitures->execute();
        $retour = $voitures->fetchAll();
        $voitures->closeCursor();
        return $retour;
    }
}