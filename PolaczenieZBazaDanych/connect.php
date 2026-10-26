
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dziennik";

$polaczenie = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


// Zadanie 1
$zapytanie1 = "SELECT imie, nazwisko FROM uczen WHERE id_klasa = 10 ORDER BY nazwisko ASC";
$wynik1 = mysqli_query($polaczenie, $zapytanie1);

echo "<ol>";
while ($wiersz1 = mysqli_fetch_assoc($wynik1)) {
    echo "<li>" . $wiersz1['nazwisko'] . " " . $wiersz1['imie'] . "</li>";
}
echo "</ol>";



// Zadanie 2
$zapytanie2 = 'SELECT nauczyciel.imie, nauczyciel.nazwisko, nauczyciel.data_urodzenia FROM nauczyciel ORDER BY nauczyciel.data_urodzenia DESC';
$wynik2 = mysqli_query($polaczenie, $zapytanie2);

echo "<table border='3'>";
echo "<tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
      </tr>";

while ($wiersz2 = mysqli_fetch_assoc($wynik2)) {
    echo "<tr>";
    echo "<td>" . $wiersz2['imie'] . "</td>";
    echo "<td>" . $wiersz2['nazwisko'] . "</td>";
    echo "<td>" . $wiersz2['data_urodzenia'] . "</td>";
    echo "</tr>";
}

echo "</table>";



// Zadanie 3
$zapytanie3 = "SELECT COUNT(*) AS iloscnauczycieli FROM nauczyciel WHERE imie LIKE '%a'";
$zapytanie33 = "SELECT COUNT(*) AS iloscuczniow FROM uczen WHERE imie LIKE '%a'";


$wynik3 = mysqli_query($polaczenie, $zapytanie3);
$wynik33 = mysqli_query($polaczenie, $zapytanie33);

$wiersz3 = mysqli_fetch_assoc($wynik3);
$wiersz33 = mysqli_fetch_assoc($wynik33);


echo "Liczba nauczycieli: " . $wiersz3['iloscnauczycieli'] . "<br>";
echo "Liczba uczniów: " . $wiersz33['iloscuczniow'];



// Zadanie 4
$zapytanie4 = 'UPDATE ocena SET ocena = ocena + 1';
$wynik4 = mysqli_query($polaczenie, $zapytanie4);

$zapytanie44 = "SELECT ocena FROM ocena";               // wyswietlenie
$wynik44 = mysqli_query($polaczenie, $zapytanie44);

while ($wiersz44 = mysqli_fetch_assoc($wynik44)) {
    echo "Powiększona ocena: " . $wiersz44['ocena'] . "<br>";
}



// zadanie 5
$zapytanie5 = 'SELECT * FROM nauczyciel WHERE nauczyciel.data_urodzenia < "1950-01-01"';
$wynik5 = mysqli_query($polaczenie, $zapytanie5);
$wiersz5 = mysqli_fetch_assoc($wynik5);
$ilosc = $wiersz5['ilosc'];

$zapytanie55 = "DELETE FROM nauczyciel WHERE data_urodzenia < '1950-01-01'";
$wynik55 = mysqli_query($polaczenie, $zapytanie55);

if ($wynik55) {
    echo "Liczba usuniętych nauczycieli: " . $ilosc . "<br>";
    echo "Nauczyciele zostali prawidłowo usunięci z bazy danych.";
} else {
    echo "Błąd podczas usuwania nauczycieli.";
}

//

mysqli_close($polaczenie);

?>