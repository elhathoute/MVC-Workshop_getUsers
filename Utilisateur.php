<?php
class Utilisateur{
    public static function getAll($db){
        //recup all users from db
        $stm = $db->prepare('SELECT * FROM utilisateurs');
        $stm->execute();
        return $stm->fetchAll();
    }
}


?>