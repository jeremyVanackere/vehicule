<?php

include  'Entity/VehiculeEntity.php';
include "BDD.php";

class VehiculeRepo
{
    public function getAll() {
        $bdd = new BDD();
        $con = $bdd->connexion();

        $data = $con->query('select * from vehicule');

        $vehicules = array();

        // Pas de service ni de endpoint, ni de mapper, ni conteneur etc... ( trop petit projet )
        foreach ($data as $row) {
            $vehicule = new VehiculeEntity();
            $vehicule->setId($row['id']);
            $vehicule->setType($row['type']);
            $vehicule->setMarque($row['marque']);

            array_push($vehicules, $vehicule);
        }

        $bdd->close();
        return $vehicules;
    }
}