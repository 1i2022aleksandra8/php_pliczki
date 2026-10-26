<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FormularzSklep</title>
</head>
<body>
    <main>
        <div class="formularz">
            <h1 id="wypelnij">Wypełnij</h1>
            <form action="form.php" method="POST">
                <label for="koszulki">Liczba zamawianych koszulek:</label><br>
                <input type="number" id="koszulki" min="0" name="koszulki"><br>

                <label for="spodnie">Liczba zamawianych spodni:</label><br>
                <input type="number" id="spodnie" min="0" name="spodnie"><br>

                <label for="czapki">Liczba zamawianych czapek:</label><br>
                <input type="number" id="czapki" min="0" name="czapki"><br><br>

                <button type="submit" id="btn">Złóż zamówienie</button>
            </form><br><br>
        </div>

        <div class="cennik">
            <h1>Cennik</h1>
            <div class="napisy">
                <p>Koszulka - 75zł</p>
                <p>Spodnie - 120zł</p>
                <p>Czapka - 35zł</p>
            </div>
        </div>
        <br><br>
    </main>


    <?php
    if (isset($_POST['koszulki']) || isset($_POST['spodnie']) || isset($_POST['czapki'])){

    $koszulki = (int)($_POST['koszulki'] ?? 0);
    $spodnie = (int)($_POST['spodnie'] ?? 0);
    $czapki = (int)($_POST['czapki'] ?? 0);

    $cenaKoszulki = 75;
    $cenaSpodni = 120;
    $cenaCzapki = 35;

    $kosztKoszulek = $koszulki * $cenaKoszulki;
    $kosztSpodni = $spodnie * $cenaSpodni;
    $kosztCzapek = $czapki * $cenaCzapki;

    $suma = $kosztKoszulek + $kosztSpodni + $kosztCzapek;

    echo "<h1>Podsumowanie twoich zakupów: </h1>";
    echo "<p>Kupiono: " . $koszulki . " koszulki, " . $spodnie . " pare/pary spodni, " . $czapki . " czapki</p>";
    echo "<p>Suma do zapłaty: " . $suma . " zł</p>";
    echo "<p><b>Dziękujemy za zakupy!</b></p>";
    }
    ?>


 <!-- http://localhost/SklepFormularz/form.php -->

</body>
</html>