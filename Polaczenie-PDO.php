<?php
/**
 * połączenie do bazy danych za pomocą biblioteki PDO
 */
include_once("pdo.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połączenie do bazy danych za pomocą biblioteki pdo </title>

    <style> table,th,td {
        border:1px solid black;

    }</style>
</head>
<body>
    <?php

        $zapytanie ="SELECT ID,imie,naziwsko FROM uczniowie;";
        echo "<table><tr><td>ID</td><td>imie</td><td>naziwsko</td></tr><table>";
        foreach ($poloczenie->query($zapytanie) as $wiersz) {

            echo("<tr>" . "<td>" .$wiersz["ID"] . "</td><td>" . $wiersz["imie"] . "</td><td>" . $wiersz["naziwsko"] . "</td></tr><br>");
        
        }
        echo "</table>";
    ?>
</body>
</html>

<?php $poloczenie = null; ?>