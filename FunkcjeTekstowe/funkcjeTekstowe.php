<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="funkcjeTekstowe.php" method="post">
        <label for="imie">Imie</label>
        <input type="text" id="imie" name="imie"><br><br>

        <label for="nazwisko">Nazwisko</label>
        <input type="text" id="nazwisko" name="nazwisko"><br><br>

        <input type="submit" value="Dodaj">
        <input type="reset" value="Wyczysc">
    </form>




<?php
$_SERVER['REQUEST_METHOD'] = 'POST';

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$dlugosc = strlen($imie);
$bimie = trim($imie);
$bnazwisko = trim($nazwisko);
$duzeimie = ucwords($bimie);
$duzenazwisko = ucwords($nazwisko);


if($dlugosc > 3){
    echo $duzeimie. ' ' .$duzenazwisko;
} else {
    echo "Złe dane, Za krótkie";
}


?>
</body>
</html>


<!-- form 2pola imie i nazwisko
zamienic pierwsze litery maja byc z duzych 
sprawdz jezeli poda imie krotwsze niz 3 litery to ma byc kominikat złe dane 
usunac biale znaki -->