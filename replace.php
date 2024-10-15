<?php
// $phrase = "Ви повинні їсти фрукти кожного дня."; // об’єкт - рядок
// $healthy = "фрукти"; // значення, яке будемо замінювати
// $sweets = "цукерки"; // значення, яким будемо замінювати
// $newphrase = str_replace($healthy, $sweets, $phrase); // робимо заміну
// echo $newphrase; // Ви повинні їсти цукерки кожного дня.

// $greeting = array(
//     "Привіт",
//     "Привіт усім!",
//     "Привіт, дорога!"
//     ); // об’єкт – масив
//     $new_greet = str_replace("Привіт", "Доброго ранку", $greeting);
//     // робимо замін
$movies = [
    [
        "name" => "Фрэнк  ",
        "surname" => "Дарабонт",
        // "area" => 640679,
        "film" => [
            "nazva_filma" => "Втеча з Шоушенка",
            "year" => 1994,
        ],
    ],
    [
        "name" => "England",
        "capital" => "London",
        // "area" => 130395,
        "film" => [
            "nazva_filma" => "Втеча з Шоушенка",
            "year" => 1994,
        ],
    ],
    [
        "name" => "Deutschland",
        "capital" => "Berlin",
        // "area" => 357021,
        "film" => [
            "nazva_filma" => "Втеча з Шоушенка",
            "year" => 1994,
        ],
    ],
];

for ($i = 0; $i < count($movies); $i++) {
    echo "{$movies[$i]['name']} : {$movies[$i]['surnme']} film: {$movies[$i]['film']}  nazva_filma: {$movies[$i]['film']['nazva_filma']} year: {$movies[$i]['film']['year']}\n";
}

echo "\n";

foreach ($movies as $i => $movie) {
    // $number = $i+1;
    echo "$i ";
    //print_r($country);
    //echo $country["name"] . " " . $country["capital"] . " " . $country["area"];

    foreach ($movie as $key => $value) {
        echo "$key: ";
        if (!is_array($value)) {
            echo $value . " ";
        } else {
            // echo $value["2000"] . " ". $value["2010"];
            foreach ($value as $k => $v) {
                echo "[$k - $v]";
            }
        }
    }
    echo ";\n";
}

function name($a, $b)
{
    if ($a["name"] < $b["name"]) {
        return -1;
    } elseif ($a["name"] == $b["name"]) {
        return 0;
    } else {
        return 1;
    }
}

// function average($a, $b)
// { // функция, определяющая способ сортировки (по сумме населения за 2000 и за 2010 годы)
//     if ($a["population"]["2000"] + $a["population"]["2010"] < $b["population"]["2000"] + $b["population"]["2010"]) {
//         return -1;
//     } elseif ($a["population"]["2000"] + $a["population"]["2010"] == $b["population"]["2000"] + $b["population"]["2010"]) {
//         return 0;
//     } else {
//         return 1;
//     }

// }

function print_movie($movie, $key_movie, $data)
{
    // static $i=1; // статическая глобальная переменная-счетчик
    echo $data . " ";
    foreach ($movie as $key => $value) {
        if (!is_array($value)) {
            echo "$key:$value\t";
        } else {
            echo "$key: ";
            foreach ($value as $k => $v) {
                echo "[{$k} год. - $v] ";
            }

        }
    }
    echo "Average film: . $movie" ;
    // надо перевести в рядок implode(string $separator, array $array): string
    echo "\n";

    // $i++;
}

// цей момент для дз
function search($movies, $data)
{
    // print_r($countries);
    // echo $data;
    $result = [];
    foreach ($movies as $movie_number => $movie) {
        foreach ($movie as $key => $value) {
            if (!is_array($value)) {
                if (stripos($value, $data)) {
                    $result[] = $movie_number;
                }
            } else {
                foreach ($value as $k => $v) {
                    if (stripos($v, $data)) {
                        $result[] = $movie_number;
                    }
                }

            }
        }

    }
    // return array_unique($result);
    $flip_result = array_flip(array_unique($result));
    $movies_search_result = array_intersect_key($movies, $flip_result);
    return $movies_search_result;
}

echo "№  Імя\tПрізвище\t\tФільми\n";
array_walk($movies, "print_movie", "№");

uasort($movies, "name");

echo "№   Імя\tПрізвище\t\tФільми\n";
array_walk($movies, "print_movie", "№");

$res = search($movies, 19);
print_r($res);

$subject = "шен";
echo "Результат пошуку\"$subject\"";
$res = search($res, $subject);
array_walk($res, "print_movie", "№");
