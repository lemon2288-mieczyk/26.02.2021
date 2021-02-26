<?php include_once("msqli.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ćwiczenia połączenia do baz danych zadanie 1</title>
</head>
<body>
    <h1>test polacznia do mysql za pomocą klasy mysqli</h1>
    <?php
    $zapytanie = $polocznie->query("SELECT ID,imie,naziwsko FROM uczniowie;");
            while (list($ID,$imie,$naziwsko)=mysqli_fetch_array($zapytanie)) {
                echo("$ID , $imie , $naziwsko <br>");
            }
    ?>
</body>
</html>
<?php $polocznie->close(); ?>