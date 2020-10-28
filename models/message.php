<?php
    require_once 'model.php';

    class Message extends Model{

        const PAGE = 15;

        public function getAllMessages(){
            $sql = 'SELECT * FROM LIVREDOR';
            $messages = $this->goQuery($sql);
            $retour = $messages->fetchAll();
            $messages->closeCursor();
            return $retour;
        }

        public function getMessagesPage($page){
            
            $premier = ($page*self::PAGE)-self::PAGE;
            
            $sql = "SELECT * FROM LIVREDOR ORDER BY id DESC LIMIT ?, ?";
            $messages = $this->getDb()->prepare($sql);
            $messages->bindValue(1,$premier,PDO::PARAM_INT);
            $messages->bindValue(2,self::PAGE,PDO::PARAM_INT);
            $messages->execute();
            $retour = $messages->fetchAll();
            $messages->closeCursor();
            return $retour;
        }

        public function countMessages(){
            $sql = "SELECT COUNT(*) AS nbMsg FROM LIVREDOR";
            $nbMessages = $this->goQuery($sql);
            $retour = $nbMessages->fetch();
            $retour = (int)$retour['nbMsg'];
            return $retour;
        }

        public function addMessage($pseudo,$msg,$note){
            $sql = "INSERT INTO LIVREDOR VALUES (null,?,?,?,?)";
            $message = $this->getDb()->prepare($sql);
            $message->bindValue(2,$pseudo,PDO::PARAM_STR);
            $message->bindValue(1,date("Y-m-d H:i:s"));
            $message->bindValue(3,$msg,PDO::PARAM_STR);
            $message->bindValue(4,$note,PDO::PARAM_INT);
            $message->execute();
        }
    }