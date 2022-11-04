<html>
<title>Hotel</title>
<link rel="stylesheet" href="table.css">
<head>
    <meta charset="UTF-8">
</head>
<?php
$css = file_get_contents('/laragon/www/AKGEDIK/PHP_POO/PHP_HOTEL/style.css');

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

?>