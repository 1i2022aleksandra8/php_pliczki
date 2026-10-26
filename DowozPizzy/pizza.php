<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dowóz pizzy</title>
</head>
<body>
    <main>
        <div class="formularz">
            <h1 id="napis">Twoja pizza</h1>
            <form action="pizza.php" method="POST">
                <label for="ilosc">Ilość pizzy:</label>
                <input type="number" min="0" name="ilosc" id="ilosc"><br>

                <label for="temperatura">Temperatura:</label>
                <input type="checkbox" value="ciepła" name="ciepla">
                <input type="checkbox" value="normalna" name="normalna"><br>

                <label for="spodnie">Jak daleko musi dojechać (wpisz w km):</label><br>
                <input type="number" id="km" min="0" name="km"><br>

                <button type="submit" id="btn">Złóż zamówienie</button>
            </form><br><br>
        </div>
        <br><br>
    </main>


    <?php
    if (isset($_POST['ilosc']) || isset($_POST['ciepla']) || isset($_POST['normalna']) || isset($_POST['km'])){

    $ilosc = (int)($_POST['ilosc'] ?? 0);
    $ciepla = (int)($_POST['ciepla'] ?? 0);
    $normalna = (int)($_POST['normalna'] ?? 0);
    $km = (int)($_POST['km'] ?? 0);

    $cenaPizzy = 20;
    $cenaCieplej = $cenaPizzy * 15%;

    $kosztPizzy = $ilosc * $cenaPizzy;
    $kosztcieplej = $cenaCieplej * $ilosc;

    $suma = $kosztcieplej + $kosztPizzy;

    echo "<h1>Podsumowanie twoich zakupów: </h1>";
    echo "<p>Kupiono: " . $ilosc . " pizze</p>";
    echo "<p>Suma do zapłaty: " . $suma . " zł</p>";
    echo "<p><b>Dziękujemy za zakupy!</b></p>";
    }
    ?>


 <!-- http://localhost/SklepFormularz/form.php -->

</body>
</html>













<!-- obliczyc koszt dowodu pizzy

czy pizza ma dotrzec ciepla chceckbox - +15% zł za dowoz
pole number - odleglosc w km 



km * 50groszy  -->