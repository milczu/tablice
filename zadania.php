<?php
$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);
$wypis1 = $tab1[4];
$tab1[6] = 12;
$tab2 = $tab1;
$tab3 = array();
for($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}
$tab2 = array_reverse($tab1);

$tab_uzytkownika = array(3, 12, 5, 3, 8, 1, 9, 3, 15, 6);
$min_el = $tab_uzytkownika[0];
$max_el = $tab_uzytkownika[0];
$suma = 0;
for($i = 0; $i < count($tab_uzytkownika); $i++) {
    if($tab_uzytkownika[$i] < $min_el) { $min_el = $tab_uzytkownika[$i]; }
    if($tab_uzytkownika[$i] > $max_el) { $max_el = $tab_uzytkownika[$i]; }
    $suma += $tab_uzytkownika[$i];
}
$srednia = $suma / count($tab_uzytkownika);

$ile_trojek = 0;
foreach($tab_uzytkownika as $val) {
    if($val == 3) { $ile_trojek++; }
}

$posortowane = $tab_uzytkownika;
sort($posortowane);
$n = count($posortowane);
if($n % 2 == 0) {
    $mediana = ($posortowane[($n/2) - 1] + $posortowane[$n/2]) / 2;
} else {
    $mediana = $posortowane[floor($n/2)];
}

$trzy_min = array($posortowane[0], $posortowane[1], $posortowane[2]);
$trzy_max = array($posortowane[$n-3], $posortowane[$n-2], $posortowane[$n-1]);

$kwadraty = array();
foreach($tab_uzytkownika as $val) {
    $kwadraty[] = $val * $val;
}

$parzyste = 0;
$nieparzyste = 0;
foreach($tab_uzytkownika as $val) {
    if($val % 2 == 0) {
        $parzyste++;
    } else {
        $nieparzyste++;
    }
}

$podzielne_przez_trzy = 0;
foreach($tab_uzytkownika as $val) {
    if($val % 3 == 0) {
        $podzielne_przez_trzy++;
    }
}

$znaki = array('a', 'B', 'c', 'D', 'e', 'F', 'g', 'H', 'i', 'J');
$zamienione = array();
foreach($znaki as $znak) {
    if($znak >= 'A' && $znak <= 'Z') {
        $zamienione[] = strtolower($znak);
    } else {
        $zamienione[] = strtoupper($znak);
    }
}
$losowa_kolejnosc = $znaki;
shuffle($losowa_kolejnosc);

$losowe_100 = array();
for($i = 0; $i < 100; $i++) {
    $losowe_100[] = rand(1, 50);
}

$max_losowe = $losowe_100[0];
for($i = 0; $i < 100; $i++) {
    if($losowe_100[$i] > $max_losowe) {
        $max_losowe = $losowe_100[$i];
    }
}

$ile_max = 0;
for($i = 0; $i < 100; $i++) {
    if($losowe_100[$i] == $max_losowe) {
        $ile_max++;
    }
}

$nieparzyste_losowe = array();
for($i = 0; $i < 100; $i++) {
    if($losowe_100[$i] % 2 != 0) {
        $nieparzyste_losowe[] = $losowe_100[$i];
    }
}

$nieparzyste_indeksy = array();
for($i = 1; $i < 100; $i += 2) {
    $nieparzyste_indeksy[] = $losowe_100[$i];
}

$przedzial = array();
for($i = 0; $i < 100; $i++) {
    if($losowe_100[$i] >= 5 && $losowe_100[$i] < 15) {
        $przedzial[] = $losowe_100[$i];
    }
}

$liczba_a = 25;
$najblizszy = $losowe_100[0];
$min_roznica = abs($losowe_100[0] - $liczba_a);
for($i = 0; $i < 100; $i++) {
    $roznica = abs($losowe_100[$i] - $liczba_a);
    if($roznica < $min_roznica) {
        $min_roznica = $roznica;
        $najblizszy = $losowe_100[$i];
    }
}

$min_val = $losowe_100[0];
$min_idx = 0;
for($i = 0; $i < 100; $i++) {
    if($losowe_100[$i] < $min_val) {
        $min_val = $losowe_100[$i];
        $min_idx = $i;
    }
}

$poprzednik = null;
if($min_idx > 0) {
    $poprzednik = $losowe_100[$min_idx - 1];
}

$nastepnik = null;
if($min_idx < 99) {
    $nastepnik = $losowe_100[$min_idx + 1];
}

$wieksze_niz_dziesiec = array();
for($i = 0; $i < 100; $i++) {
    if($losowe_100[$i] > 10) {
        $wieksze_niz_dziesiec[] = $losowe_100[$i];
    }
}

$tab_b = array();
$suma_kumulacyjna = 0;
for($i = 0; $i < 100; $i++) {
    $suma_kumulacyjna += $losowe_100[$i];
    $tab_b[$i] = $suma_kumulacyjna;
}

$posortowane_malejaco = $losowe_100;
rsort($posortowane_malejaco);

$wystapienia_trzy = array();
for($i = 1; $i <= 50; $i++) {
    $licznik = 0;
    for($j = 0; $j < 100; $j++) {
        if($losowe_100[$j] == $i) {
            $licznik++;
        }
    }
    if($licznik >= 3) {
        $wystapienia_trzy[] = $i;
    }
}

$fib = array(0 => 0, 1 => 1);
for($i = 2; $i < 100; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

$potegi_dwa = array();
$p = 1;
for($i = 0; $i < 100; $i++) {
    $potegi_dwa[$i] = $p;
    $p = $p * 2;
}

$ciag_trzy = array();
for($i = 0; $i < 100; $i++) {
    $ciag_trzy[$i] = ($i + 1) * 3;
}

$ciag_geom = array();
$g = 2;
for($i = 0; $i < 100; $i++) {
    $ciag_geom[$i] = $g;
    $g = $g * 2;
}
?>