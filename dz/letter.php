<?php

$text = "Ми будемо раді бачити Вашого сина на нашому заході.  Чекаємо на нього 25 жовтня. Оргкомітет.";

$phrases = explode(". ", $text);
$org = "Оргкомітет";
$admin = "Адміністрація";
$new = str_replace($org, $admin, $text);

$syn = "Вашого сина";
$dochka = "Вашу доньку";

$new2 = str_replace($syn, $dochka, $new);

$na_nogo = "на нього";
$na_nei = "на неї";

$new3 = str_replace($na_nogo, $na_nei, $new2);
// $mas=implode(array $phrases, $text " ."): $text;
print_r(substr_replace($new3, 'Шановний Василь Васильович! ', 0, 0));
