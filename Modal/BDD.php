<?php

class BDD
{
    private $user = "root";
    private $pass = "root";
    private $dbName = "vehicule";
    private $bdd = null;

    public function connexion() {
        try {
            $this->bdd = new PDO("mysql:host=localhost;dbname=$this->dbName", $this->user, $this->pass, array(
                PDO::ATTR_PERSISTENT => true
            ));
            return $this->bdd;
        } catch
        (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function close() {
        $this->bdd = null;
    }
}