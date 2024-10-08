<?php

function check($text)
{
  
    $odna_cov = substr_count($text, "'");
    $dve_cov = substr_count($text, '"');
    $duzky = substr_count($text, '()');
    if($duzky%2!==0){
        echo "Кількість дужок не співпадає!\n";
    }
    else{
        echo "Кількість дужок  співпадає!\n";
    }

    
    if ($odna_cov % 2 !== 0) {
        echo "Кількість одинарних лапок не співпадає!\n";
    }

    elseif ($dve_cov % 2 !== 0) {
        echo "Кількість парних лапок не співпадає!!\n";
    }
else{
  //  $odna_cov % 2 === 0 && $dve_cov % 2 === 0;
    echo "Всі лапки закриті\n";
}
    // if ( $odna_cov % 2 === 0 && $dve_cov % 2 === 0) {
    //     echo "Все кавычки парные.\n";
    // }
}

// Пример использования
$text = '"Hello""; "print((($a + ($b))))";';
check($text);
