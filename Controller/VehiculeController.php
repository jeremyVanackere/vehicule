<?php

include 'Modal/VehiculeRepo.php';

function getAllVehicule() {
    $vehiculeRepo = new VehiculeRepo();
    $vehicules = $vehiculeRepo->getAll();
    return json_encode($vehicules);
}