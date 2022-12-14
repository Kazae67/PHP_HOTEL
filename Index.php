<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hotel</title>
    
</head>
<body>
    <h1>POO HOTEL</h1>
<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
}); ?>
<?php
// H O T E L  + V I L L E 
$hotelHiltonStrasbourg = new Hotel("<strong>Hitlon **** Strasbourg</strong>", "10 route de la Gare 67000 STRASBOURG");
$hotelRegentParis = new Hotel("Regent **** Paris", "");
// C H A M B R E S
// essayer un (range) [experience]
$chambreHiltonStrasbourg1 = new Chambre(1, $hotelHiltonStrasbourg, 120, 2, true, false);
$chambreHiltonStrasbourg2 = new Chambre(2, $hotelHiltonStrasbourg, 120, 2, true, false);
$chambreHiltonStrasbourg3 = new Chambre(3, $hotelHiltonStrasbourg, 120, 2, true, false);
$chambreHiltonStrasbourg4 = new Chambre(4, $hotelHiltonStrasbourg, 120, 2, false, true);
$chambreHiltonStrasbourg5 = new Chambre(5, $hotelHiltonStrasbourg, 120, 2, false, true);
$chambreHiltonStrasbourg6 = new Chambre(6, $hotelHiltonStrasbourg, 120, 2, true, true);
$chambreHiltonStrasbourg7 = new Chambre(7, $hotelHiltonStrasbourg, 120, 2, false, true);
$chambreHiltonStrasbourg8 = new Chambre(8, $hotelHiltonStrasbourg, 120, 2, true, true);
$chambreHiltonStrasbourg9 = new Chambre(9, $hotelHiltonStrasbourg, 120, 2, false, true);
$chambreHiltonStrasbourg10 = new Chambre(10, $hotelHiltonStrasbourg, 120, 2, false, true);
$chambreHiltonStrasbourg11 = new Chambre(11, $hotelHiltonStrasbourg, 120, 2, true, true);
$chambreHiltonStrasbourg12 = new Chambre(12, $hotelHiltonStrasbourg, 120, 2, false, true);
$chambreHiltonStrasbourg13 = new Chambre(13, $hotelHiltonStrasbourg, 120, 2, true, true);
$chambreHiltonStrasbourg14 = new Chambre(14, $hotelHiltonStrasbourg, 120, 2, true, true);
$chambreHiltonStrasbourg15 = new Chambre(15, $hotelHiltonStrasbourg, 120, 2, false, true);
$chambreHiltonStrasbourg16 = new Chambre(16, $hotelHiltonStrasbourg, 120, 2, false, true);
$chambreHiltonStrasbourg17 = new Chambre(17, $hotelHiltonStrasbourg, 120, 2, false, true);
// C L I E N T S
$virgile = new Client("Virgile", "GIBELLO");
$micka = new Client("Micka", "MURMANN");
// R E S E R V A T I O N S
$reservation1 = new Reservation($virgile, $chambreHiltonStrasbourg1, $hotelHiltonStrasbourg, "01-01-2021", "01-01-2021");
$reservation2 = new Reservation($micka, $chambreHiltonStrasbourg2, $hotelHiltonStrasbourg, "11-03-2021", "15-03-2021");
$reservation3 = new Reservation($micka, $chambreHiltonStrasbourg3, $hotelHiltonStrasbourg, "01-04-2021", "17-04-2021");
// A F F I C H A G E S
echo $hotelHiltonStrasbourg;
echo $hotelHiltonStrasbourg->afficherReservations();
echo "<br>";
echo $hotelRegentParis->afficherReservations();
echo "<br>";
echo $micka->afficherReservations();
echo $micka->afficherTotalReservations();
echo "<br>";
echo $hotelHiltonStrasbourg->afficherStatutsTable();

?>
</body>
</html>