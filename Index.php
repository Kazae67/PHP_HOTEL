<html>
<title>Hotel</title>
<link rel="stylesheet" href="table.css">
<head>
    <meta charset="UTF-8">
</head>
<?php
$css = file_get_contents('/laragon/www/AKGEDIK/PHP_HOTEL/style.css');

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// Hotel + ville
$hotelHiltonStrasbourg = new Hotel("Hitlon **** Strasbourg", "10 route de la Gare 67000 STRASBOURG");

// Afficher : nombre de chambres, nombre de chambres réservées, nombre de chambres dispo
echo $hotelHiltonStrasbourg->getEtatChambres();

$chambreHiltonStrasbourg1 = new Chambre(1, $hotelHiltonStrasbourg, 120, "€", 2, false, true);

?>