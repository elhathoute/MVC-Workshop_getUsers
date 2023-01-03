<?php
require_once 'Utilisateur.php';
class ExampleController{
    public function run(){
        //connexion to db
        $db = new PDO('mysql:host=localhost;dbname=example', 'root', '');
        //recuperation des donnees 
        $data = array(
            'titre'=>'Liste des utilisateurs',
            'utilisateurs'=>Utilisateur::getAll($db)
        );
        //generer de la vue 
        require_once 'views/example.php';
    }
}



?>