<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ObiektDaty</title>
</head>
<body>
    <?php
    $today1 = date("F j, Y, g:i a");
    $today2 = date("m.d.y");
    $today3 = date("j, n, Y");
    $today4 = date("Ymd");
    $today5 = date("h-i-s, j-m-y, it is w Day z ");
    $today6 = date("\i\t \i\s \t\h\e jS \d\a\y.");
    $today7 = date("D M j G:i:s T Y");
    $today8 = date("H:m:s \m \t\o\ \m\i\e\s\i\a\c");
    $today9 = date("H:i:s");


    $dzien = date("d");
    $dzien_tyg = date("l");
    $miesiac = date("n");
    $rok = date("Y");


    $miesiac_pl = array(
        1 => 'stycznia', 
        'lutego', 
        'marca', 
        'kwietnia', 
        'maja', 
        'czerwca', 
        'lipca', 
        'sierpnia', 
        'września', 
        'października', 
        'listopada', 
        'grudnia');


    $dzien_tyg_pl = array(
        'Monday' => 'poniedziałek', 
        'Tuesday' => 'wtorek', 
        'Wednesday' => 'środa', 
        'Thursday' => 'czwartek', 
        'Friday' => 'piątek', 
        'Saturday' => 'sobota', 
        'Sunday' => 'niedziela');
    
    echo $dzien_tyg_pl[$dzien_tyg].",".$dzien." ".$miesiac_pl[$miesiac]." ".$rok."r";


    //echo date ("1", mktime (0,0,0,$data['miesiac'],$data['dzien'],$data['rok']));
    //$czas = (mktime (0,0,0,$data['miesiac'],$data['dzien'],$data['rok'])-time())/60/60/24;

    //ile dni minelo od 1 wrzesnia do dzisiaj
    echo date("d.m.Y", mktime(0, 0, 0, 9, 1, 2026));
    $czas = (mktime(0, 0, 0, 9, 1, 2026) - time()) / 60 / 60 / 24;
    echo $czas;

    //ile dni minelo od 1 wrzesnia do dzisiaj zaokraglone
    $start = mktime(0, 0, 0, 9, 1, 2026);
    $dzis = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    $czas = floor(($dzis - $start) / 86400);
    echo $czas;

    //echo $today1;
    //echo $today2;
    //echo $today3;
    //echo $today4;
    //echo $today5;
    //echo $today6;
    //echo $today7;
    //echo $today8;
    //echo $today9;








    //Zadania: 

    // Zadanie 1 - w jaki dzień tygodnia sie urodziłam
    $dni = [
    'Monday' => 'poniedziałek',
    'Tuesday' => 'wtorek',
    'Wednesday' => 'środa',
    'Thursday' => 'czwartek',
    'Friday' => 'piątek',
    'Saturday' => 'sobota',
    'Sunday' => 'niedziela'
    ];
    $dzien = date("l", mktime(0, 0, 0, 2, 9, 2009));
    echo "Urodziłam się w " . $dni[$dzien];



    // Zadanie 2 - ile dni i miesięcy minęło od danej jakiejś daty (np. urodziny mojego psa)
    $ur = time() - (mktime(0,0,0,7,5,2018));
    $dni = round($ur/86400);
    $miesiace = round($dni/30);

    echo "od urodin mojego psa minęło $dni dni lub $miesiace miesięcy"





    // Zadanie 3 - ile dni minelo od moich urodzin lub ile dni zostało do moich urodzin (rok przyjmujemy 2026)
    $start = mktime(0, 0, 0, 2, 19, 2026);
    $dzis = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    $czas = floor(($dzis - $start) / 86400);
    echo "Od moich urodzin minęło $czas dni";
    ?>
</body>
</html>

//Zadanie 1: podajac swoja date urodzenia zeby sie wyswietlilo ze sie urodzilam w jaki dzien tygodnia np srode
//Zadanie 2: na podstawie podania mojej daty urodzenia ma pokazac ile minelo dni i miesiecy od tamtej daty
//Zadanie 3: przyjmujemy rok 2026 - podac dzien i miesiac mojego urodzenia i program mowi ze od moich urodzin minelo ...dni lub do moich nastepnych urodzin pozostalo...dni.