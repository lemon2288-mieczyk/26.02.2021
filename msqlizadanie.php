<?php
/**
 * towrze polaczenie za pomocąklasy msqli
 */
//konfiguracja---------------------------------------------------------------
$user = "root";//nazwa uzytkownika z uprawnieniami do bazy danych
$passworld = "";// hasło dostępowe dla użytkowniaka w/w 
$host = "localhost";//adres serwera ip lub lokalnie nazwa lub nazwa domenowa
$dbname = "szkola";// wybór bazy danych
$port = 3306; 

$polocznie = @new Mysqli($host,$user,$passworld,$dbname,$port);


if(mysqli_connect_errno()!==0){
    echo ("<p>wystąpił błąd połączenia do bazy danych".mysqli_connect_error()."</p");
    //mysqli_connect_error() odpowiadzialna za wyświetlenie błędów

}else{
            echo("poloczono do bazy danych");
}


?>