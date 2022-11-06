<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="table.css">
    <title>Hotel</title>
</head>
<body>

<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

// Hotels + Villes
$hotelHiltonStrasbourg = new Hotel("Hitlon **** Strasbourg", "10 route de la Gare 67000 STRASBOURG");

// Chambres
$chambreHiltonStrasbourg1 = new Chambre(1, $hotelHiltonStrasbourg, 120, "€", 2, false, true);
$chambreHiltonStrasbourg2 = new Chambre(1, $hotelHiltonStrasbourg, 120, "€", 2, false, true);
$chambreHiltonStrasbourg3 = new Chambre(1, $hotelHiltonStrasbourg, 120, "€", 2, false, true);
// Clients
$virgile = new Client("Virgile", "GIBELLO");
$micka = new Client("Micka", "MURMANN");
// Reservations
$virgile = new Reservation($virgile, $chambreHiltonStrasbourg1, $hotelHiltonStrasbourg, "01/01/2021", "01/01/2021");
$micka = new Reservation($micka, $chambreHiltonStrasbourg2, $hotelHiltonStrasbourg, "11/03/2021", "11/03/2021");

// Affichage
echo $hotelHiltonStrasbourg;
echo $hotelHiltonStrasbourg->afficherHotel();
echo $hotelHiltonStrasbourg->afficherReservation();




?>
</body>
</html>