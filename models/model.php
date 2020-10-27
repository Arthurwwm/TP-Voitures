<?php

abstract class Model {

    private $db;

    protected function goQuery($sql, $params = null){
        if($params == null){
            $result = $this->getDb()->query($sql);
        } else {
            $result = $this->getDb()->prepare($sql);
            $result->execute($params);
        }
        return $resul;
    }

    private function getDb(){
        if($this->db == null){
            $this->db = new PDO('mysql:host=localhost;dbname=autoRetro;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->db;
    }
}