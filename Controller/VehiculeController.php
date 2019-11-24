<?php

include 'Modal/VehiculeRepo.php';

function getAllVehicule() {
    $vehiculeRepo = new VehiculeRepo();
    $vehicules = $vehiculeRepo->getAll();
    return json_encode($vehicules);
}

function getOneVehicule($id) {
    $vehiculeRepo = new VehiculeRepo();
    $vehicules = $vehiculeRepo->getOne($id);
    return json_encode($vehicules);
}