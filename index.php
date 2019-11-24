<html>

<?php

include 'Controller/VehiculeController.php'
?>
<head>

</head>

<body>

<?php
if(!isset($_GET['id']))
    echo getAllVehicule();
else
    echo getOneVehicule($_GET['id']);
?>

</body>
</html>